<?php

// Classe Categoria

class Categoria {
    private $nome;
    private $prodotti;
    
    public function __construct($nome) {
        $this->nome = $nome;
        $this->prodotti = array();
    }
    
    public function aggiungi_prodotto(Prodotto $prodotto) {
        $this->prodotti[] = $prodotto;
    }
    
    public function visualizza_schede_prodotti() {
        echo "Categoria: " . $this->nome . "<br>";
        echo "Prodotti disponibili:<br>";
        foreach ($this->prodotti as $prodotto) {
            $prodotto->visualizza_scheda_prodotto();
        }
    }

}