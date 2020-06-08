<?php
include_once __DIR__ . '/persona.php';
class Magazzinieri extends Persona{
    public $settore;
    public $badge;
    public $stato;


    public function __construct($_nome , $_cognome , $_età , $_settore , $_badge , $_stato){
        parent::__construct($_nome , $_cognome , $_età );
        
        $this->settore = $_settore;
        $this->badge = $_badge;
        $this->stato = $_stato;
    }
}
function getStatus($a){
    if(is_int($a)){
        if($a==0){
            return "Occupato";
        }else{
            return "Disponibile";
        }
    }else{
        throw new Exception("Errore nel caricamento dello stato");
    }  
}

try{

}catch(Exception $e){
    echo 'Messaggio: ' . $e->getMessage();
}




?>