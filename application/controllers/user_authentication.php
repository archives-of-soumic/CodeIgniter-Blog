<?php 
    session_start();
    class User_Authentication extends CI_Controller{
        public function __construct(){  
            parent::__construct();  
            // load helper lib 
            $this->load->helper('form');
            $this->load->library('form_validation');
            $this->load->library('session');
            // load db 
            $this->load->model('login_database');
        }

        public function index(){
            $this->load->view('login_form');
        }

        public function new_user_registration(){
            $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
            $this->form_validation->set_rules('email_value', 'Email', 'trim|required|xss_clean');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
        
            if($this->form_validation->run() == FALSE){
                $this->load->view('registration_form');
            }else{
                
            }
        }

        function __destruct(){}
    }
?>