<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Public_ctl extends CI_Controller {

	
	public function index() {
		$this->load->view('public/home_view', array('msg' => ''));
	}
	
	public function msg() {
	    $this->form_validation->set_rules('name', 'name', 'callback_validate_msg');
	    if($this->form_validation->run()) {
	        $this->Home_model->send_msg($this->msg_param);
	        $this->load->view('public/home_view', array('msg' => '<strong>Your message was sent. Thank you!</strong><br>'));
	    }
	    else {
	        
	        $this->load->view('public/home_view', array('msg' => '<strong>There was an error sending your message. Please,
                try again later or call 925-691-7522. Thank you!</strong><br>'));
	    }
	}
	
	public function validate_msg() {
	    $param['name'] = $this->input->post('name');
	    $param['email'] = $this->input->post('email');
	    $param['phone'] = $this->input->post('phone');
	    $param['message'] = $this->input->post('msg');
	    
	    $this->msg_param = $param;
	    
	    if($param['name'] == '' || valid_email($param['email']) != TRUE || $param['phone'] == '' || $param['message'] == '') {
	        $this->form_validation->set_message('validate_msg', 'Please, fill all information below. Thank you!');
	        return FALSE;
	    }
	    else {
	        return TRUE;
	    }
	}
}
