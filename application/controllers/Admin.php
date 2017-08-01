<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library(array('session', 'form_validation', 'email'));
        $user_data = $this->session->userdata('logged_in');
        if($user_data){
            if($this->session->userdata('type')==1){
                redirect('user/index');
            }
        }else{
            redirect('auth/login');
        }
    }

    public function index(){
        $data['title'] = $this->session->userdata('user_name').'- in Nano Test';
        $data['comments'] = $this->codegen_model->get('comment','id,comment,user_name,comment,status,created_at','','',null,null);

        $this->load->view('include/header',$data);
        $this->load->view('admin/index');
        $this->load->view('include/footer');
    }
    public function approve(){
        $id = $this->uri->segment(3);
        $this->codegen_model->edit('comment',array('status'=>1),'id',$id);
        redirect('admin/index');
    }
    public function not_approve(){
        $id = $this->uri->segment(3);
        $this->codegen_model->edit('comment',array('status'=>0),'id',$id);
        redirect('admin/index');
    }


    public function logout(){
        $this->session->sess_destroy();
        redirect('welcome');
    }

}
