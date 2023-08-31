<?php
    class landing_model extends CI_Model
    {
        public function __construct()
        {

            parent::__construct();
            $kiubix_db = $this->load->database('navegas', true);
            #$kiubix_db->query("SET SESSION sql_mode='TRADITIONAL'");
            #$this->db->query("SET SESSION sql_mode='TRADITIONAL'");
        }

        public function guardar($form){
            #var_dump($_POST);

            $db = $this->load->database('navegas', TRUE);
            
            if ($form>0) {
                $db->insert("req_form", $form);
                return true;
            }
            return false;

        }
    }
?>