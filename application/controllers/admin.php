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
        $data['usuario'] = $this->usuario->get($id);
        $this->load->view('user_details', $data);
    }

    public function user_delete($id)
    {
        $this->load->helper('url');
        $this->load->model('usuario');
        $this->usuario->delete($id);
        $usuario_logueado = '';
        $this->log->insert('se borra el usuario id='.$id, $usuario_logueado);
        $this->index();
    }

    public function new_user()
    {
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('origen');
        $data['origenes'] = $this->origen->get_all();
        $this->load->view('add_user_form', $data);
    }

    public function insert_user()
    {
        $this->load->helper('url');
        $this->load->model('usuario');
        // $this->log->insert();
        $usuario = $this->input->post('usuario');
        $password = $this->input->post('password');
        $origen = $this->input->post('origen');
        $perfil = $this->input->post('perfil');
		$this->usuario->insert($usuario,$password, $origen, $perfil);
        $usuario_logueado = '';
        $this->log->insert('se crea el usuario='.$usuario, $usuario_logueado);
        $this->load->view('success_user_add');
    }

    // carga formulario select
    public function user_edit($id)
    {
        $this->load->helper(array('url', 'form'));
        $this->load->model('usuario');
        $this->load->model('origen');
        $data['origenes'] = $this->origen->get_all();
        $data['usuario'] = $this->usuario->get($id);
        $data['perfiles'] = array(
            '1' => 'Administrador',
            '2' => 'Usuario normal'
        );
        $this->load->view('edit_user_form', $data);
    }

    // guarda la info del formulario en la bd update
    public function update_user()
    {
        $this->load->helper('url');
        $this->load->model(array('usuario', 'log'));
        // $this->log->insert();
        $id = $this->input->post('id');
        $usuario = $this->input->post('usuario');
        $password = $this->input->post('password');
        $origen = $this->input->post('origen');
        $perfil = $this->input->post('perfil');
		$this->usuario->update($id, $usuario, $password, $origen, $perfil);
        $usuario_logueado = '';
        $this->log->insert('se modifica el usuario id='.$id, $usuario_logueado);
        $this->load->view('success_user_edit');
    }

}