<?php

class Landing extends CI_Controller {
   
    function __construct(){
        parent::__construct();
        $this->load->model('landing_model');
    }
    
    public function index(){
        $this->load->view('Landingview/index');
      
    }

    public function Guardar() {
        $nombre = $this->input->post('nombre');
        $correo = $this->input->post('correo');
        $telefono = $this->input->post('telefono');
        $descripcion = $this->input->post('descripcion');

        $data= array(
            'nombre'=> $nombre,
            'correo' => $correo,
            'telefono' => $telefono,
            'descripcion' => $descripcion

        );

        #echo "<pre>".print_r($data, true)."</pre>";

        $insert_id= $this->landing_model->guardar($data);
        
        if ($insert_id) {
            echo "OK"; // Devuelve "OK" en caso de éxito
        } else {
            echo "Error al insertar los datos en la base de datos.";
        }

    }
}
