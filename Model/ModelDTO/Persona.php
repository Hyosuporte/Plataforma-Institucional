<?php
abstract class Persona
{
    public $id;
    public $nombre;
    public $apellido;
    public $edad;
    public $correo;
    public $genero;
    public $telefono;
    public $direccion;
    public $rol;

    abstract public function getId();
    abstract public function getNombre();
    abstract public function getApellido();
    abstract public function getEdad();
    abstract public function getCorreo();
    abstract public function getGenero();
    abstract public function getTelefono();
    abstract public function getDireccion();
    abstract public function setId($object);
    abstract public function setNombre($object);
    abstract public function setApellido($object);
    abstract public function setEdad($object);
    abstract public function setCorreo($object);
    abstract public function setGenero($object);
    abstract public function setTelefono($object);
    abstract public function setDireccion($object);
    abstract public function setRol($object);
    abstract public function getRol();

}