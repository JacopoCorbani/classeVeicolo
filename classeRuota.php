<?php 
    class Ruota {
        protected $pressione;
        protected $tipologia;
    
        function __construct($pressione, $tipologia) {
            $this->pressione = $pressione;
            $this->tipologia = $tipologia;
        }
    
        function getPressione() {
            return $this->pressione;
        }
        function getTipologia() {
            return $this->tipologia;
        }

        function gonfia($n){
            if($n>0){
                $this->pressione += $n;
            }
            return $this->pressione;
        }
        function sgonfia($n){
            if($n>0){
                $this->pressione -= $n;
                if($this->pressione < 0){
                    $this->pressione = 0;
                }
            }
            return $this->pressione;
        }

        function toString(){
            return "pressione: {$this->pressione}, tipologia: {$this->tipologia}";
        }
    }
?>