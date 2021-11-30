<?php
class Origen extends CI_Model {

    public $id;
    public $comuna;
    public $direccion;
    public $tipo;

    private $tabla = 'origen';

    public function insert($comuna, $direccion, $tipo)
    {
            $this->comuna = $comuna;
            $this->direccion = $direccion;
            $this->tipo = $tipo;
            $this->db->insert($this->tabla, $this);
    }

}