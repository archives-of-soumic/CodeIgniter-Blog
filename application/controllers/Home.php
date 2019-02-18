<?php 
    class Home extends CI_Controller{
        public function __construct()
        {  
            parent::__construct(); 
            //$this->load->helper('url');
        }

        //public function index(){    echo "hello"; }

        public function index(){
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('home/home_view');
            $this->load->view('templates/footer');
        }

        function __destruct(){}
    }
?>