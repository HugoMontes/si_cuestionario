<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Escritorio extends CI_Controller {

  public function index(){
    $this->load->view('backend/escritorio');
  }
}