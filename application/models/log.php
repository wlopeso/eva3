<?php
class Log extends CI_Model {

    public $id;
    public $inicio_sesion;
    public $accion;
    public $usuario;
    public $fin_sesion;

    private $tabla = 'log';

    public function insert($inicio_sesion, $accion, $usuario, $fin_sesion)
    {
            $this->inicio_sesion = $inicio_sesion;
            $this->accion = $accion;
            $this->usuario = $usuario; // fk tabla usuario
            $this->fin_sesion = $fin_sesion;
            $this->db->insert($this->tabla, $this);
    }

}