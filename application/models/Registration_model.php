<?php
    class Registration_model extends CI_Model{
        public function __construct(){
            parent::__construct();
        }
        public function index(){} 
        public function __destruct(){}

        public function setCredentials( $name, $email, $pass){
            try{
                $args = array(
                    'name'=>$name,
                    'email'=>$email,
                    'pass'=>$pass
                );
                $this->db->insert('User', $args);
            }catch(exception $x){
                $x->getMessage();
            }
        }
    }
?>