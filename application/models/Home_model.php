<?php
class Home_model extends CI_Model {
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function send_msg($param) {
		
	    if($param['test_email'] == '') {
	        unset($param['test_email']);
    	    $recipient = 'jank@jlkconsulting.info';
    		$message = "Message from JLK:\n\n Name: " . $param['name'] . "\n\n" . "Phone:\n\n" . $param['phone'] . "\n\n" . 
    		"Message:\n\n" . $param['message'];
    		mail($recipient, 'Msg from JLK', $message);
    		
    		$msg_arr = array(
    				'date' => time(),
    				'name' => $param['name'],
    				'email' => $param['email'],
    				'phone' => $param['phone'],
    				'message' => $param['message']);
    		
    		$this->db->insert('messages', $msg_arr);
	    }
	}
	
	public function register($param) {
		$retval = TRUE;
		
		$rand_str = bin2hex(openssl_random_pseudo_bytes(12));
		
		$param['verifystr'] = base_url() . 'index.php/public_ctl/confirm_reg/' . $rand_str;
		$param['email_key'] = $rand_str;
		
		if($param['id_team'] != 0) {
			$param['id_team'] = $this->Team_model->get_all_teams_arr()['data'][$param['id_team']]['id_team'];
		}
		else {
		    $param['id_team'] = 28;
		}
		
		if($param['phone'] == '') {
			unset($param['phone']);
		}
		
		$this->db->select('email');
		$q = $this->db->get_where('user_tbl', array('email' => $param['email']));
		
		if($q->num_rows() == 0) {
			$recipient = 'jank@jlkconsulting.info';
			$subject = 'Fair Ball registration';
			$message = $param['fname'] . ' ' . $param['lname'] . "\n\n".
					$param['street'] . "\n\n" .$param['city'] . ' ' . $param['state_cd'] . $param['zip_cd'] . "\n\n".
					' Phone: ' . $param['phone'] . ' | Email: ' . $param['email'] . "\n\n" . ' Role: ' . $param['role'] . ' | Team ID: ' . $param['id_team'];
					
			mail($recipient, $subject, $message);
					
			$recipient = $param['email'];
			$subject = 'Fair-Ball Registration';
					
			$this->db->select('type_code');
			$this->db->where('code_str', $param['role']);
			
			$param['type_code'] = $this->db->get('user_types')->row()->type_code;
					
			$message = 'To finish your registration for Fair-Ball.com click on the following link or copy paste in the browser: ' . $param['verifystr'] . "\n\n";
			$message .= 'You must do so within 72 hours otherwise you login information may be deactivated. Thank you for your interest in Fair-Ball!';
					
			mail($recipient, $subject, $message);
			
			$param['active'] = 1;
			
			$this->db->insert('user_tbl', $param);
			
			$this->db->select('id_user');
			$this->db->where('email', $param['email']);
			
			$param['id_user'] = $this->db->get('user_tbl')->row()->id_user;
			
			$param['team_role'] = $param['role'];
			unset($param['role']);
			unset($param['active']);
			unset($param['email_key']);
			unset($param['verifystr']);
			unset($param['type_code']);
			
			$this->db->insert('team_roster', $param);
					
		}
		else {
			$retval = FALSE;
		}
		
		
		
		
		return $retval;
		
	}
	
	public function reset_password($email) {
		
		$this->db->select('email');
		$this->db->where('email', $email);
		if($this->db->get('users')->num_rows() > 0) {
			$retval = TRUE;
		}
		else {
			$retval = FALSE;
		}
		
		return $retval;
	}
	
	public function set_user_login($param) {
		$retval = TRUE;
		
		if($param['pass1'] == $param['pass2']) {
			$setarr['pass'] = password_hash($param['pass1'], PASSWORD_BCRYPT, array('cost' => 12));
			$setarr['user_name'] = $param['user_name'];
			$setarr['active'] = 0;
			$this->db->select('active');
			$this->db->where('id_user', $param['id_user']);
			if($this->db->get('user_tbl')->row()->active == 1) {
				$this->db->where('id_user', $param['id_user']);
				$this->db->update('user_tbl', $setarr);
			}
			else {
				$retval = FALSE;
			}
		}
		else {
			$retval = FALSE;
		}
		
		if($retval) {
		}
		
		return $retval;
	}
	
	public function get_user_to_reg($verifystr) {
		
		$this->db->select('*');
		$this->db->where('email_key', $verifystr);
		$row = $this->db->get('user_tbl')->row();
		
		$retarr['fname'] = $row->fname;
		$retarr['lname'] = $row->lname;
		$retarr['id_user'] = $row->id_user;
		$retarr['user_name'] = '';
		
		return $retarr;
	}
	
	public function forgot_password($param) {
		
		$retarr['error'] = NULL;
		$retarr['username'] = NULL;
		
		$this->db->select('*');
		$this->db->where('email', $param['email']);
		$q = $this->db->get('user_tbl')->row();
		
		if(count($q) == 0) {
			$retarr['error'] = 'Email address doesn\'t exist in the system';
			$retarr['flag'] = FALSE;
		}
		else {			
			if($param['pass1'] == $param['pass2']) {
				$param['pass'] = password_hash($param['pass1'], PASSWORD_BCRYPT, array('cost' => 12));
				unset($param['pass1']);
				unset($param['pass2']);
				$this->db->select('user_name');
				$this->db->where('email', $param['email']);
				
				$retarr['username'] = $this->db->get('user_tbl')->row()->user_name;
				
				$retarr['flag'] = TRUE;
				
				$this->db->where('email', $param['email']);
				unset($param['email']);
				
				$this->db->update('user_tbl', $param);
			}
			else {				
				$retarr['error'] = 'Passwords did not match';
				$retarr['flag'] = FALSE;
			}			
			
		}
		
		return $retarr;
	}
}