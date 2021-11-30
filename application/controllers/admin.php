<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function index()
    {
        # code...
        $this->load->helper('url');
        $this->load->model('usuario');
        $data['usuarios'] = $this->usuario->get_all_info();
        $this->load->view('home_admin', $data);
    }

    public function user($id)
    {
        $this->load->helper('url');
        $this->load->model('usuario');
        // $data['usuarios'] = $this->usuario->get(1);
        var_dump($this->usuario->get($id));
        // $this->load->view('home_admin', $data);
    }

    public function test()
    {
        $this->load->model('usuario');
        // $this->origen->insert('MAIPU','SANTIAGO','PARTICULAR');
		$this->usuario->insert('test','test', 1, 1);
        echo 'usuario de prueba insertado';
    }

}