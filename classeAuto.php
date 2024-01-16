<?php 
    include 'classeVeicolo.php';
    include 'classeRuota.php';

    class Auto extends Veicolo{
        private $numeroPorte;
        private $postiOlogati;
        private $ruote = array();

        public function __construct($marca, $modello, $motore, $revisione, $numeroPorte, $postiOlogati, $numeroRuote, $pressioneRuota, $tipologiaRuota) {
            parent::__construct($marca, $modello, $motore, $revisione);
            $this->numeroPorte = $numeroPorte;
            $this->postiOlogati = $postiOlogati;

            for ($i=0; $i < $numeroRuote; $i++) { 
                $this->ruote[] = new Ruota($pressioneRuota, $tipologiaRuota);
            }
        }
        private function numeroRuote(){
            return count($this->ruote);
        }
        function toString() {
            return parent::toString() . ", numero porte: {$this->numeroPorte}, posti omologati: {$this->postiOlogati}, numero ruote: {$this->numeroRuote()}";
        }

        function infoRuote(){
            $str = "Numero ruote: {$this->numeroRuote()} <br>";
            foreach ($this->ruote as $ruota) {
                $str .= $ruota->toString()."<br>";
            }
            return $str;
        }

        function getRuota($nRuota){
            return $this->ruote[$nRuota];
        }
    }

    $macchina = new Auto("Peuget", "208", "termico a benzina", 50000, 5, 5, 4, 2.3, "da strada");
    echo $macchina->toString();
    echo "<br>";
    echo $macchina->infoRuote();
    echo "<br>";
    echo "Pressione corrente ruota 1: " . $macchina->getRuota(0)->gonfia(0.4);
    echo "<br>";
    echo "Pressione corrente ruota 2: " . $macchina->getRuota(1)->gonfia(0.3);
    echo "<br>";
    echo "Pressione corrente ruota 3: " . $macchina->getRuota(2)->gonfia(0.1);
    echo "<br>";
    echo "Pressione corrente ruota 4: " . $macchina->getRuota(3)->gonfia(0.2);
?>