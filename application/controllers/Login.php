<?php 
    class Login extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');
            $this->load->library('session');
        }
        public function index(){
            $this->load->view('login/Login_view');
        }
        function __destruct(){}
    }
?>