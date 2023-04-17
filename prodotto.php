<?php

// Classe Prodotto
class Prodotto {
    private $nome;
    private $descrizione;
    private $prezzo;
    private $immagine;
    
    public function __construct($nome, $descrizione, $prezzo, $immagine) {
        $this->nome = $nome;
        $this->descrizione = $descrizione;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
    }

    public function visualizza_scheda_prodotto() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Descrizione: " . $this->descrizione . "<br>";
        echo "Prezzo: " . $this->prezzo . "<br>";
        echo "Immagine: <img src=''" . $this->immagine . "' width='300' height='300'><br>";
        echo "<br>";
    }
}
