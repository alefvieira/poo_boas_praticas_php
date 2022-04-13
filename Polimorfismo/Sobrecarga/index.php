<?php

require_once "Lobo.php";
require_once "Cachorro.php";

$lobo = new Lobo();
$lobo = new Cachorro();

$lobo->reagir();
$lobo->reagirDono(true);
$lobo->reagirHora(15);
$lobo->reagirIdade(16);