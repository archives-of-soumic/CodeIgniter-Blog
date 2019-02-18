<?php
    class Registration extends CI_Controller{
        public function __construct(){  parent::__construct(); }

        //public function index(){    echo "registration controller ok";  }

        public function index2(){
            $this->load->view('templates/header');
            $this->load->view('registration/registration_view');
            $this->load->view('templates/footer');
            
        }

        public function index(){
            //$this->load->helper('url');
            //$this->load->view('templates/header');
            //$this->load->view('templates/nav');
            try{
                $this->load->model('registration_model');
                $this->registration_model->setCredentials('coleanderson', 'cole.anderson@outlook.com','asdf' );
                echo "ok\n";
            }catch(exception $x){
                echo "failed\n";
                echo $x->getMessage();
            }
            $this->load->view('templates/footer');
        } 


        public function __destruct(){}
    }
?>