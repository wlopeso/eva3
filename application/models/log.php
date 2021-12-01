<?php
class Log extends CI_Model {

    public $id;
    public $accion;
    public $usuario;

    private $tabla = 'log';

    public function insert($accion, $usuario)
    {
            $this->accion = $accion;
            $this->usuario = $usuario; // fk tabla usuario
            $this->db->insert($this->tabla, $this);
    }

}