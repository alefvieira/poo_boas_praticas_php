<?php

require_once "Visitante.php";
require_once "Aluno.php";
require_once "Bolsista.php";

$p1 = new Visitante();

$p1->setNome("alef");
$p1->setIdade(25);
$p1->setSexo("M");
var_dump($p1);

$p2 = new Aluno();

$p2->setNome("Carlos");
$p2->setIdade(27);
$p2->setSexo("M");
$p2->setCurso("Fisioterapia");

var_dump($p2);
$p2->pagarMensalidade();

$bolsista1 = new Bolsista();
$bolsista1-> setBolsa("60%");
$bolsista1-> setCurso("Matemática");
$bolsista1-> setNome("Hoffman");
$bolsista1-> setMatricula(1112);
$bolsista1->pagarMensalidade();
var_dump($bolsista1);
