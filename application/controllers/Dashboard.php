<?php

    class Dashboard extends CI_Controller {
    
        function __construct(){
            parent::__construct();
            $this->load->model('dashboard_model');
        }
        
        public function index(){
    
            $info=['info' => $this->dashboard_model->obtenerEncuestas()];
            #echo "<pre>".print_r($data, true)."</pre>";
            $this->load->view('Dashboardview/template');
            $this->load->view('Dashboardview/dashboard', $info);
            
        }

        

}


?>