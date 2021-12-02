<?php
class Vigia extends CI_Model {

    public $id;
    public $accion;
    public $usuario;
    public $creado_en;

    private $tabla = 'log';

    public function insert($accion, $usuario)
    {
            $this->load->helper('date');
            $this->accion = $accion;
            $this->usuario = $usuario; // fk tabla usuario
            $this->creado_en = date("Y-m-d H:i:s");
            $this->db->insert($this->tabla, $this);
    }

    public function get_all_vigia()
    {
        $this->db->select('log.id, log.usuario, log.accion, log.creado_en, usu.usuario');
        $this->db->from($this->tabla);
        $this->db->join('usuarios usu', 'log.usuario=usu.id');
        $this->db->order_by('log.id', 'asc');
        $query = $this->db->get();
        return $query->result();
    }


}

