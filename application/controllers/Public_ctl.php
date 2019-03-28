<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Public_ctl extends CI_Controller {

    var $msg_param;
    var $msg;
	
	public function index() {
		$this->load->view('public/home_view', array('msg' => ''));
	}
	
	public function msg() {
	    $this->form_validation->set_rules('name', 'name', 'callback_validate_msg');
	    if($this->form_validation->run()) {
	     $this->Home_model->send_msg($this->msg_param);
	     }
	    $this->load->view('public/home_view', $this->msg);
	}
	
	public function validate_msg() {
	    $rand_int = $this->uri->segment(3, 0);	    
	    $param = array();
	    $param['name'] = $this->input->post('name');
	    $param['email'] = $this->input->post('email');
	    $param['test_email'] = $this->input->post('test_email-' . $rand_int);
	    $param['phone'] = $this->input->post('phone');
	    $param['message'] = $this->input->post('msg');
	    
	    $this->msg_param = $param;
	    
	    if($param['name'] == '' || $param['phone'] == '' || $param['message'] == '') {
	        $this->form_validation->set_message('validate_msg', 'Please, fill correctly all information below. Thank you!');
	        $this->msg = array('msg' => '<strong>There was an error sending your message. Please,
                try again later or call 925-691-7522. Thank you!</strong><br>');
	        return FALSE;
	    }
	    elseif(!(filter_var($param['email'], FILTER_VALIDATE_EMAIL))) {
	        $this->msg = array('msg' => '<strong>Please, enter a valid email. Thank you!</strong><br>');
	        return FALSE;
	    }
	    else {
	        $this->msg = array('msg' => '<strong>Your message was sent. Thank you! Reload home page by clicking 
            <a href="http://jlkconsulting.info">here</a></strong><br>');
	        return TRUE;
	    }
	}
}
