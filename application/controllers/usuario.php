<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    public function index()
    {
        # code...
        $this->load->helper('url');
        $this->load->view('home_user');
    }

    public function quienes_somos()
    {
        # code...
        $this->load->helper('url');
        $this->load->view('quienessomos');
    }

    public function login()
    {
        # code...
        $this->load->helper('url');
        $this->load->view('login');
    }

}