<?php

//creation class 
class Persona{
    public $nome;
    public $cognome;
    public $età;

    public function __construct($_nome , $_cognome , $_età){
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->età = $_età;
    }

}
?>