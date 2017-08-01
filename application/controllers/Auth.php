<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library(array('session', 'form_validation', 'email'));
        $user_data = $this->session->userdata('logged_in');
        if($user_data){
            redirect('user/index');
        }
    }

    function login(){
        if($this->input->post()){
            $this->form_validation->set_rules('user_name', 'User Name', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('include/header');
                $this->load->view('auth/login');
                $this->load->view('include/footer');
            }
            else
            {
                $user_name = trim($this->input->post('user_name'));
                $password = md5($this->input->post('password'));
                $result = $this->db->get_where('user', array('user_name' => $user_name,'password'=>$password))->row();
                if($result){
                    $session_data = array(
                        'id'        => @$result->id,
                        'user_name' => @$result->user_name,
                        'type'      => @$result->type,
                        'password'  => @$result->password,
                        'logged_in' => TRUE
                    );
                    $this->session->set_userdata($session_data);

                    if($result->type==0){
                        redirect('admin/index');
                    }else{
                        redirect('user/index');
                    }
                }else{
                    $this->session->set_flashdata('error','Login unsuccessful, user not found. Please try again');
                    $this->load->view('include/header');
                    $this->load->view('auth/login');
                    $this->load->view('include/footer');
                }
            }

        }else{
            $this->load->view('include/header');
            $this->load->view('auth/login');
            $this->load->view('include/footer');
        }
    }

    function registration(){
        if($this->input->post()){
            $this->form_validation->set_rules('user_name', 'User Name', 'required|is_unique[user.user_name]');
            $this->form_validation->set_rules('password', 'Password', 'required|matches[confirm_password]');
            $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required');

            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('include/header');
                $this->load->view('auth/registration');
                $this->load->view('include/footer');
            }
            else
            {
                $user_name = trim($this->input->post('user_name'));
                $password = md5($this->input->post('password'));
                $result = $this->codegen_model->add('user', array('user_name' => $user_name,'password'=>$password));
                if($result){
                    $this->session->set_flashdata('success','Thank you for registration.');
                    $this->load->view('include/header');
                    $this->load->view('auth/registration');
                    $this->load->view('include/footer');
                }else{
                    $this->session->set_flashdata('error','Login unsuccessful, user not found. Please try again');
                    $this->load->view('include/header');
                    $this->load->view('auth/registration');
                    $this->load->view('include/footer');
                }
            }

        }else{
            $this->load->view('include/header');
            $this->load->view('auth/registration');
            $this->load->view('include/footer');
        }
    }
}
