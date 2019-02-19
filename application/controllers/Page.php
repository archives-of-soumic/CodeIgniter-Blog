<?php 
    class Page extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('Page_model');
        }
        function __destruct(){}

        public function index(){
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('page/Page_view');
            $this->load->view('templates/footer');
        }
    }
?>