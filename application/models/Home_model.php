<?php 
    class Home_model extends CI_Model{
        public function __construct(){  parent::__construct();   }
        public function __destruct(){}

        function getAllBlogs(){
            $this->db->select('blog_id,title,content');
            $this->db->from('blog');
            $result = $this->db->get();
            return $result;
        }
    }
?>