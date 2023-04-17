<?php

require_once __DIR__.'/prodotto.php';
require_once __DIR__.'/categoria.php';


// Creazione delle categorie
$cane = new Categoria("Cane");
$gatto = new Categoria("Gatto");
$uccelli = new Categoria("Uccelli");
$pesci = new Categoria("Pesci");

// Creazione dei prodotti
$prodotto1 = new Prodotto("Croccantini per cani", "Cibo per cani, gustoso e nutriente", 15.99, "croccantini_cane.jpg");
$prodotto2 = new Prodotto("Cuccia per gatti", "Comoda cuccia per gatti, con cuscino imbottito", 29.99, "cuccia_gatto.jpg");
$prodotto3 = new Prodotto("Giocattolo per uccelli", "Giocattolo colorato per uccelli, con campanello", 5.99, "giocattolo_uccelli.jpg");
$prodotto4 = new Prodotto("Acquario completo", "Acquario per pesci, con filtro e illuminazione LED", 99.99, "acquario_pesci.jpg");


?>
 