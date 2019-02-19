<?php
    class Test extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('Registration_model');
            $this->load->model('Login_model');
        }

        public function index(){
            echo "welcome to tests\n<br>";
            echo "Login test <br>";
            $this->test3();

        }

        function test1(){
            if($this->Registration_model->setCredentials('shikder', 'fahimpro115@gmail.com','qwert')==TRUE){
                echo "test1 passed!<br>";
            }else{
                echo "test1 failed!<br>";
            }
        }

        function test2(){
            if($this->Login_model->getLoginAuth('fahimfarhan','secret') == TRUE)
            {      echo "test2.1 passed!<br>";  }
            else{  echo "test2.1 failed!<br>";  }

            if($this->Login_model->getLoginAuth('rifat','qwert') == FALSE )
            {      echo "test2.2 passed!<br>";  }
            else{  echo "test2.2 failed!<br>";  }

            if($this->Login_model->getLoginAuth('rifat','000') == FALSE  )
            {      echo "test2.3 passed!<br>";  }
            else{  echo "test2.3 failed!<br>";  }

            if($this->Login_model->getLoginAuth('shikder','111') == FALSE  )
            {      echo "test2.4 passed!<br>";  }
            else{  echo "test2.4 failed!<br>";  }
            
            
        }

        function test3(){
            $this->Login_model->getLoginAuth('fahimfarhan','secret');
        }
    }
?>