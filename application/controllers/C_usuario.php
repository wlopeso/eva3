<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_usuario extends CI_Controller {

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
        $this->load->helper(array('url', 'form'));
        $this->load->view('login');
    }

    public function check_login()
    {
        $this->load->helper('url');
        $usuario = $this->input->post('usuario');
        $password = $this->input->post('password');

        $this->load->model(array('usuario' => 'user'));
        $login = $this->user->login($usuario, $password);

        if($login){
            // $this->log->insert('inicia sesion el usuario='.$usuario, $this->session->usuario);
            if($this->session->perfil == '1'){
                redirect('/admin/index/');
            } else {
                $this->index();
            }
        } else {
            $this->login();
            //TODO: mostrar usuario invalido
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        $this->login();
    }

}