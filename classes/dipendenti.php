<?php
include_once __DIR__ .'/persona.php';

class Dipendenti extends Persona{
    public $mansione;
    public $salario;
    public $contratto;
    public $grado;

    public function __construct($_nome , $_cognome , $_età , $_mansione , $_salario , $_contratto){
        parent::__construct($_nome , $_cognome , $_età );
        
        $this->mansione = $_mansione;
        $this->salario = $_salario;
        $this->contratto = $_contratto;
        $this->grado = grado($_salario);
    }
}
function grado($salary){
    if(is_int($salary)){
        if($salary >= 2000){
            return "Grado Massimo";
        }else if($salary >1500){
            return "Grado alto";
        }else{
            return "Grado minimo";
        }
    }else{
        throw new Exception("Errore nel caricamento del salario");
    }  
}

try{

}catch(Exception $e){
    echo 'Messaggio: ' . $e->getMessage();
}
?>