<?php
require_once "Ave.php";
require_once "Mamifero.php";
require_once "Peixe.php";
require_once "Repitil.php";

$a = new Ave();
$m = new Mamifero();
$p = new Peixe();
$r = new Repitil();

$m->setPeso(90);
$m->setIdade(16);
$m->setMembros(4);
$m->locomover();
$m->alimentar();
$m->emitirSom();


$a->setPeso(0.99);
$a->setIdade(2);
$a->setMembros(2);
$a->locomover();
$a-> fazerNinho();


var_dump($m);
// var_dump($a);


require_once "Descendentes/Canguru.php";
require_once "Descendentes/Dog.php";

$cang = new Canguru();

$cang-> setPeso(10.70);
$cang-> setIdade(18);
$cang-> setMembros(4);
$cang-> locomover(); // saltando
$cang-> emitirSom();


var_dump($cang);

