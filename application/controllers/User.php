<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library(array('session', 'form_validation', 'email'));
        $user_data = $this->session->userdata('logged_in');
        if($user_data){
            if($this->session->userdata('type')==0){
                redirect('admin/index');
            }
        }else{
            redirect('auth/login');
        }
    }

    public function index(){
        $data['title'] = $this->session->userdata('user_name').'- in Nano Test';
        $data['comments'] = $this->codegen_model->get('comment','user_name,comment,created_at',array('user_id !='=>$this->session->userdata('id'),'status'=>1),'10',null,null);
        $data['my_comments'] = $this->codegen_model->get('comment','user_name,comment,created_at',array('user_id'=>$this->session->userdata('id'),'status'=>1),'10',null,null);

        $this->load->view('include/header',$data);
        $this->load->view('user/index');
        $this->load->view('include/footer');
    }

    public function add_comment(){
        if($this->input->post()){
            $this->form_validation->set_rules('comment', 'Comment', 'required');

            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('include/header');
                $this->load->view('user/index');
                $this->load->view('include/footer');
            }
            else
            {
                $comment = trim($this->input->post('comment'));
                $result = $this->codegen_model->add('comment',array('comment'=>$comment,'user_id'=>$this->session->userdata('id'),'user_name'=>$this->session->userdata('user_name')));
                if($result){
                    $this->session->set_flashdata('success','Your comment is waiting for approval');
                    redirect('user/index');
                }else{
                    $this->session->set_flashdata('error','Sorry, comment not taken. Please try again');
                    $this->load->view('include/header');
                    $this->load->view('user/index');
                    $this->load->view('include/footer');
                }
            }

        }else{
            $this->load->view('include/header');
            $this->load->view('user/index');
            $this->load->view('include/footer');
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('welcome');
    }

}
