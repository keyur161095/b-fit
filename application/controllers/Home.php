<?php defined('BASEPATH') OR exit('no direct script is allowed');?>

<?php
/**
 *
 */
class Home extends CI_Controller
{
  public function index()
  {
  $this->load->view('dashboard');
  }
  
}
