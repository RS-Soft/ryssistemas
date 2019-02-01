<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal_Controller extends CI_Controller{

function __construct()
{
    parent::__construct();
}


public function index()
{
    $data = array('titulo' => 'Inicio');
    
    $this->load->view('partes/header',$data);
    $this->load->view('partes/menu');
    $this->load->view('front_views/principal');
    $this->load->view('partes/footer');
}

public function contactos()
{

    $data = array('titulo' => 'Contactos',
    'vision' => 'hidden'
);

    $this->load->view('partes/header',$data);
    $this->load->view('partes/menu');
    $this->load->view('front_views/contacto');
    $this->load->view('partes/footer');
    
}

}