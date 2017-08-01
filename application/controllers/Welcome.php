<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library(array('session', 'form_validation', 'email'));
        $user_data = $this->session->userdata('logged_in');
        if($user_data){
            redirect('user/index');
        }
    }

	public function index()
	{
        $data['comments'] = $this->codegen_model->get('comment','user_name,comment,created_at',array('status'=>1),'10',null,null);
        $data['title'] = "NANO Test";
		$this->load->view('include/header',$data);
		$this->load->view('welcome_message');
		$this->load->view('include/footer');
	}
}
