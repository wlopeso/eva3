<?php
class Usuario extends CI_Model {

    public $id;
    public $usuario;
    public $pass;
    public $origen;
    public $perfil;

    private $tabla = 'usuarios';

    public function insert($usuario, $pass, $origen, $perfil)
    {
            $this->usuario = $usuario;
            $this->pass = $pass;
            $this->origen = $origen; // clave foranea
            $this->perfil = $perfil;
            $this->db->insert($this->tabla, $this);
    }

    public function get($id)
    {
        $this->db->select('u.id, u.usuario, u.pass, o.comuna, u.perfil');
        $this->db->from($this->tabla." u");
        $this->db->join('origen o', 'u.origen=o.id');
        $this->db->where('u.id', $id);
        $this->db->order_by('u.id', 'asc');
        $query = $this->db->get();
        return $query->result();
        
    }

    public function get_all()
    {
        $query = $this->db->get($this->tabla);
        return $query->result();
    }

    public function get_all_info()
    {
        $this->db->select('u.id, u.usuario, u.pass, o.comuna, u.perfil');
        $this->db->from($this->tabla." u");
        $this->db->join('origen o', 'u.origen=o.id');
        $this->db->order_by('u.id', 'asc');
        $query = $this->db->get();
        return $query->result();
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->tabla);
    }

    public function update($id, $usuario, $pass, $origen, $perfil)
    {
        $data = array(
            'id' => $id,
            'usuario'  => $usuario,
            'pass'  => $pass,
            'origen'  => $origen,
            'perfil'  => $perfil,
    );
        $this->db->replace($this->tabla, $data);
    }

    public function login($usuario, $password)
    {
        $this->db->select('*');
        $this->db->from($this->tabla);
        $this->db->where('usuario', $usuario);
        $this->db->where('pass', $password);
        $this->db->order_by('id', 'asc');
        $result = $this->db->get();
        if ($result->num_rows()==1) {
            //usuario valido
            $user_db_data = $result->result();
            $newdata = array(
                'usuario' => $user_db_data[0]->usuario,
                'perfil' => $user_db_data[0]->perfil,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($newdata);
            return true;
        } else {
            // usuario no valido
            $this->session->sess_destroy();
            return false;
        }
    }

}