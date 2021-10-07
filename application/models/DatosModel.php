<?php

    class datosModel extends CI_model
    {
        public function __construct()
        {
            $this->load->database();
        }

        public function registro ($name, $email, $pass)
        {
            return $this->db->insert("datos",["name"=>$name,
            "email"=>$email,
            "pass"=>$pass]);
        }
             
    }

?>