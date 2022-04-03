
<?php
// peso leve 
// peso médio 
// peso pesado
require_once "Objeto/Lutador.php";
require_once "Objeto/Luta.php";

$lutadores[0] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9,  11, 2, 1);
$lutadores[1] = new Lutador("Putscript","Brasil", 29, 1.68, 68.8, 14, 2, 3);
$lutadores[2] = new Lutador("Ufocobol","Brasil", 37, 1.7, 119.3,  5, 4, 3);  
$lutadores[3] = new Lutador("Nerdaard", "EUA", 30, 1.81, 105.7, 12, 2, 4);
$lutadores[4] = new Lutador("Luffytaro", "Brasil", 30, 1.81, 60, 16, 3, 2);
$lutadores[5] = new Lutador("Zoro-Nissan", "Japão", 30, 1.81, 78, 12, 2, 0);

// var_dump($lutadores[1]);

// marcar luta
$UEC = new Luta();
$UEC->marcarLuta($lutadores[0], $lutadores[1]);
$UEC->lutar();