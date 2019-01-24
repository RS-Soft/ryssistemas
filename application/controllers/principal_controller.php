<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal_controller extends CI_Controller{

function __construct()
{
    parent::__construct();
}


public function index()
{
    
    $this->load->view('partes/header');
    $this->load->view('partes/menu');
    $this->load->view('front_views/principal');
    $this->load->view('partes/footer');
}

}