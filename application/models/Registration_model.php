<?php
    class Registration_model extends CI_Model{
        public function __construct(){
            parent::__construct();
        }
        public function index(){} 
        public function __destruct(){}

        public function setCredentials( $name, $email, $pass){
            // 1st check if username already exists or not 
            $condition = "name LIKE '".$name."'";
            $this->db->select('*');
            $this->db->from('sql12279884.User');
            $this->db->where($condition);

            $query = $this->db->get();
            if($query->num_rows() == 0){
                try{
                    $args = array(
                        'name'=>$name,
                        'email'=>$email,
                        'pass'=>$pass
                    );
                    $this->db->insert('User', $args);
                    if($this->db->affected_rows()>0){   return TRUE;    }
                    else return FALSE;
                }catch(exception $x){
                    $x->getMessage();
                    return FALSE;
                }
            }else{      return FALSE;   }

        }
    }
?>