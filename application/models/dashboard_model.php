<?php
    class dashboard_model extends CI_Model
    {
        public function __construct()
        {

            parent::__construct();
            $kiubix_db = $this->load->database('navegas', true);
            #$kiubix_db->query("SET SESSION sql_mode='TRADITIONAL'");
            #$this->db->query("SET SESSION sql_mode='TRADITIONAL'");
        }

        public function obtenerEncuestas(){
            $db = $this->load->database('navegas', TRUE);
            $data=array();
            $data= $db->get('req_form');
            if ($data->result()) {
                $data=$data->result();
                return $data;
            }
            return false;
            #echo "<pre>".print_r($data->result(), true)."</pre>";
            
            

        }
    }
?>