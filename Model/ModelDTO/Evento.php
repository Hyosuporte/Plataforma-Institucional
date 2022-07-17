<?php
class Evento
{
    public $fecha;
    public $tipo;
    public $hora;
    public $lugar;
    public $organizador;


    public function getFecha()
    {
        return $this->fecha;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    public function geTtipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    public function getHora()
    {
        return $this->hora;
    }

    public function setHora($hora)
    {
        $this->hora = $hora;
    }

    public function getLugar()
    {
        return $this->lugar;
    }

    public function setLugar($lugar)
    {
        $this->lugar = $lugar;
    }

    public function getOrganizador()
    {
        return $this->organizador;
    }

    public function setOrganizador($organizador)
    {
        $this->organizador = $organizador;
    }
}
