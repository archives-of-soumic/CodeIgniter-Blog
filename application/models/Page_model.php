<?php 
    class Page_model extends CI_Model{
        public function __construct()
        {  parent::__construct();   }

        function __destruct(){}

        public function getPagContents($pk){
            $this->db->select('*');
            $this->db->from('blog');
            $this->db->where('blog_id='.$pk);
            
            $result1 = $this->db->get();
            $result1 = $result1->result();

            //echo $result1[0]->user_fk;

            $this->db->select('name');
            $this->db->from('User');
            $this->db->where('id='.$result1[0]->user_fk);

            $result2 = $this->db->get();
            $result2 = $result2->result();
            $array_result = array(
                'title'=>$result1[0]->title,
                'content'=>$result1[0]->content,
                'category'=>$result1[0]->category,
                'author'=>$result2[0]->name,
            );

            return $array_result;


        }
    }
?>