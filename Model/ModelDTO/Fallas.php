<?php
class Fallas{
    public $fecha;
    public $justificacion;
    public $hora;
    public $clase;
    public $docente;


    public function getFecha(){
        return $this->fecha;
    }   
    
    public function setFecha($fecha){
        $this->fecha = $fecha;
    }

    public function getJustificacion(){
        return $this->justificacion;
    }

    public function setJustificacion($justificacion){
        $this->justificacion = $justificacion;
    }

    public function getHora(){
        return $this->hora;
    }

    public function setHora($hora){
        $this->hora = $hora;
    }

    public function getClase(){
        return $this->clase;
    }

    public function setClase($clase){
        $this->clase = $clase;
    }

    public function getDocente(){
        return $this->docente;
    }

    public function setDocente($docente){
        $this->docente = $docente;
    }

}