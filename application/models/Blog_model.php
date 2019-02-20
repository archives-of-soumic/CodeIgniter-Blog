<?php 
    class Blog_model extends CI_Model{
        public function __construct(){  parent::__construct();  }
        function __destruct(){  }
        
        public function setBlog($username, $title, $content, $category){
            $insert="INSERT INTO blog (user_fk, title, content, category) VALUES ( (SELECT id FROM User WHERE NAME ='$username'),'$title','$content','$category')";
            $this->db->query($insert);
        }
    }
?>