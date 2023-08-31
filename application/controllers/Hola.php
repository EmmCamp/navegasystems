<?php

class Landing extends CI_Controller {
   
    function __construct(){
        parent::__construct();
        $this->load->model('landing_model');
    }
    
    public function index(){
        $this->load->view('Landingview/index');
      
    }


}
