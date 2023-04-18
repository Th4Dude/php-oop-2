<?php

require_once __DIR__.'/trait.php';
require_once __DIR__.'/exception.php';

// Classe Prodotto

class Prodotto {
    
    private $nome;
    private $descrizione;
    private $prezzo;
    private $immagine;

    use Sconto;
    
    public function __construct($nome, $descrizione, $prezzo, $immagine) {
        
        if ($prezzo < 0) {
            throw new PrezzoNegativoException();
        }
        
        $this->nome = $nome;
        $this->descrizione = $descrizione;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
    }

    public function visualizza_scheda_prodotto() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Descrizione: " . $this->descrizione . "<br>";
        echo "Prezzo Pieno: " . $this->prezzo . "euro" . "<br>";
        $this->applicaSconto();
        echo "Prezzo scontato: " . $this->prezzo . "euro" . "<br>";
        echo "Immagine: <img src=''" . $this->immagine . "' width='300' height='300'><br>";
        echo "<br>";
    }

}
