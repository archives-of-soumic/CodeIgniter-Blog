<?php
    class Test extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('Registration_model');
            $this->load->model('Login_model');
            $this->load->model('Home_model');
            $this->load->model('Page_model');
            $this->load->model('Blog_model');

        }

        public function index(){
            echo "welcome to tests\n<br>";
            echo "Login test <br>";
            $this->test5();

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
            $query = $this->Home_model-> getAllBlogs();
            foreach ($query->result() as $row)
            {
                    echo $row->title;
                    echo "<br>";
                    echo $row->blog_id;
                    echo "<br>";
            }
        }

        function test4(){
            $result_array = $this->Page_model->getPagContents(1);
            echo $result_array['title'];
            echo $result_array['author'];
            echo $result_array['content'];
            echo $result_array['category'];
        }

        function test5(){
            $this->Blog_model->setBlog('ezio','fff','fff content', '#tags');
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
        }
    }
?>