<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('login_model');
    }

    function index(){
        if($this->session->userdata('user')){
            redirect('dashboard');
        }else{
            $data = array(
                'title' => 'Login'
            );
    
            $this->template->load('login/index', $data, true);
        }
    }

    function login_process(){
        $data = $this->input->post();
        // var_dump($data);
        $result = $this->login_model->login_process($data);
        if($result){
            if(password_verify($data['pass'],$result->password)){
                $user_data = array(
                    "user_id" => $result->user_id,
                    "user_name" => $result->user_name,
                    "user_type" => $result->user_type,
                    "last_login" => $result->last_login,
                    "active_status" => $result->active_status
                );

                $this->session->set_userdata('user',$user_data);
        
                redirect('dashboard');
            }else{
                redirect('login');
            }
        }else{
            redirect('login');
        }
    }

    function log_out(){
        $this->session->unset_userdata('user');
        redirect('login');
    }
}
?>