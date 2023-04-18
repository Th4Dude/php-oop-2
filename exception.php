<?php

class PrezzoNegativoException extends Exception {
    public function __construct() {
        parent::__construct("Il prezzo non può essere negativo.");
    }
}