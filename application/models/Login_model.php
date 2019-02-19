<?php 
    class Login_model extends CI_Model{
        public function __construct(){  parent::__construct();  }

        public function getLoginAuth($user, $pass){
            $condition = "name = '".$user."' AND pass = '".$pass."';";
            $this->db->select('*');
            $this->db->from('User');
            $this->db->where($condition); 
            $this->db->limit(1);
            $query = $this->db->get();

            if($query->num_rows() == 1){
                return true;
            }else{  return false; }
        }

        public function getLoginAuth1($user, $pass){
            $condition = "name = '".$user."' AND pass = '".$pass."';";
            $this->db->select('id');
            $this->db->from('User');
            $this->db->where($condition); 
            $this->db->limit(1);
            $query = $this->db->get();
            echo $query;
            if($query->num_rows() == 1){
                return true;
            }else{  return false; }
        }

    }
?>