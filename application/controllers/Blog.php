<?php 
    class Blog extends CI_Controller{
        public function __construct(){    
            parent::__construct();
            $this->load->model('Blog_model');
        }
        function __destruct(){}

        public function index(){
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('blog/Blog_view');
            $this->load->view('templates/footer');
        }

        public function setNewBlog(){
            // get user
            $uname = $this->session->userdata['logged_in']['username'];
            $title = $this->input->post('title');
            $content = $this->input->post('demo1');
            $category = $this->input->post('category');

            $this->Blog_model->setBlog($uname, $title,$content, $category);
            redirect('/Blog/newCreationSuccess','refresh');
        }

        public function newCreationSuccess(){
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            echo '<br><hr><div><br>You have created new blog successfully!</div>';
            //$this->view->load('');
            $this->load->view('templates/footer');
        }
    }
?>