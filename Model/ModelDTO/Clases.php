<?php
class Clase
{
    public $fecha;
    public $lugar;
    public $hora;
    public $materia;
    public $docente;


    public function getFecha()
    {
        return $this->fecha;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    public function getLugar()
    {
        return $this->lugar;
    }

    public function setLugar($lugar)
    {
        $this->lugar = $lugar;
    }

    public function getHora()
    {
        return $this->hora;
    }

    public function setHora($hora)
    {
        $this->hora = $hora;
    }

    public function getMateria()
    {
        return $this->materia;
    }

    public function setMateria($materia)
    {
        $this->materia = $materia;
    }

    public function getDocente()
    {
        return $this->docente;
    }

    public function setDocente($docente)
    {
        $this->docente = $docente;
    }
}
