<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuestionario extends CI_Controller {

	private $seccion='Cuestionario';

  public function __construct(){
    parent::__construct();
    // modelos
    //$this->load->model('formador_model');
    //$this->load->model('navegacion_model');     
  }

  public function index(){
  	$data['seccion']=$this->seccion;
    $this->load->view('backend/cuestionario',$data);
  }

  public function nuevo(){
  	$data['seccion']=$this->seccion;
    $this->load->view('backend/cuestionario_nuevo',$data);
  }

  public function editar(){
  	$data['seccion']=$this->seccion;
    $this->load->view('backend/cuestionario_editar',$data);
  }
}