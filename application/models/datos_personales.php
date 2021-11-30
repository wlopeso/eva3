<?php
class Datos_personales extends CI_Model {

    public $id;
    public $rut;
    public $nombres;
    public $apellidos;
    public $correo;

    private $tabla = 'datos_personales';

    public function insert($rut, $nombres, $apellidos, $correo)
    {
            $this->rut = $rut;
            $this->nombres = $nombres;
            $this->apellidos = $apellidos;
            $this->correo = $correo;
            $this->db->insert($this->tabla, $this);
    }

}