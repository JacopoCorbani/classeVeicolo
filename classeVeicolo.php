<?php
class Veicolo{
    //protected permette la visualizzazione e la modifica degli attributi solo alle classi che li ereditano
    protected $marca;
    protected $modello;
    protected $motore;
    protected $revisione;

    protected function __construct($marca, $modello, $motore, $revisione){
        $this->marca = $marca;
        $this->modello = $modello;
        $this->motore = $motore;
        $this->revisione = $revisione;
    }

    function getMarca(){
        return $this->marca;
    }
    function getModello(){
        return $this->modello;
    }
    function getMotore(){
        return $this->motore;
    }
    function getRevisione(){
        return $this->revisione;
    }

    protected function percorriKm($km){
        if($km > 0 && $this->revisione > 0){
            $this->revisione -= $km;
            return "Km rimanente alla revisione: ".$this->revisione;
        }
        if($this->revisione <= 0){
            return "Effettuare la revisione!";
        }
    }

    protected function effettuaRevisione($km){
        if($km > 0){
            $this->revisione += $km;
            return "Km rimanente alla revisione: ".$this->revisione;
        }
    }

    // se non viene dichiarato l'indicatore di visibilità viene settato di default a public
    function toString(){
        return "marca: {$this->marca}, modello: {$this->modello}, motore: {$this->motore}, revisione tra {$this->revisione} km";
    }
}
