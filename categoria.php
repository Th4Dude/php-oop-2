<?php

// Classe Categoria
class Categoria {
    private $nome;
    private $prodotti;
    
    public function __construct($nome) {
        $this->nome = $nome;
        $this->prodotti = array();
    }
    
}