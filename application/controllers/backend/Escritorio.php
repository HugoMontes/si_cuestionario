<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Escritorio extends CI_Controller {

  private $seccion='Escritorio';

  public function __construct(){
    parent::__construct();
    // modelos
    //$this->load->model('formador_model');
    //$this->load->model('navegacion_model');     
  }

  public function index(){
  	$data['seccion']=$this->seccion;
    $this->load->view('backend/escritorio', $data);
  }
}