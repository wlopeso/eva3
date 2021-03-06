<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function index()
    {
        $this->_check_session();
        $this->load->helper('url');
        $this->load->model('usuario');
        $data['usuarios'] = $this->usuario->get_all_info();
        $this->load->view('home_admin', $data);
    }

    public function user($id)
    {
        $this->_check_session();
        $this->load->helper('url');
        $this->load->model('usuario');
        $data['usuario'] = $this->usuario->get($id);
        $this->load->view('user_details', $data);
    }

    public function user_delete($id)
    {
        $this->load->helper('url');
        $this->load->model(array('usuario', 'vigia'));
        $this->vigia->insert('se borra el usuario id='.$id, $this->session->id);
        $this->usuario->delete($id);
        $this->index();
    }

    public function new_user()
    {
        $this->_check_session();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('origen');
        $data['origenes'] = $this->origen->get_all();
        $this->load->view('add_user_form', $data);
    }

    public function insert_user()
    {
        $this->_check_session();
        $this->load->helper('url');
        $this->load->model('usuario');
        $this->load->model('vigia');
        $usuario = $this->input->post('usuario');
        $password = $this->input->post('password');
        $origen = $this->input->post('origen');
        $perfil = $this->input->post('perfil');
		$this->usuario->insert($usuario,$password, $origen, $perfil);
        $this->vigia->insert('se crea el usuario='.$usuario, $this->session->id);
        $this->load->view('success_user_add');
    }

    // carga formulario select
    public function user_edit($id)
    {
        $this->_check_session();
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
        $this->_check_session();
        $this->load->helper('url');
        $this->load->model(array('usuario', 'vigia'));
        // $this->vigia->insert();
        $id = $this->input->post('id');
        $usuario = $this->input->post('usuario');
        $password = $this->input->post('password');
        $origen = $this->input->post('origen');
        $perfil = $this->input->post('perfil');
		$this->usuario->update($id, $usuario, $password, $origen, $perfil);
        $this->vigia->insert('se modifica el usuario id='.$id, $this->session->id);
        $this->load->view('success_user_edit');
    }

    public function bitacora()
    {
        $this->_check_session();
        $this->load->helper('url');
        $this->load->model('vigia');
        $data['vigias'] = $this->vigia->get_all_vigia();
        $this->load->view('home_log', $data);
    }

    public function _check_session()
    {
        $this->load->helper('url');
        if($this->session->perfil != '1'){
            redirect('/c_usuario');
        }
    }
}