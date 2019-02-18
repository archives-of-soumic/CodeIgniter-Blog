<?php
    class Test extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('Registration_model');
        }

        public function index(){
            echo "welcome to tests\n<br>";

        }

        function test1(){
            if($this->Registration_model->setCredentials('shikder', 'fahimpro115@gmail.com','qwert')==TRUE){
                echo "test1 passed!<br>";
            }else{
                echo "test1 failed!<br>";
            }
        }
    }
?>