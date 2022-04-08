<?php
require_once "Animal.php";

class Ave extends Animal
{
    private $corPena;
    public function  getCorPena(){return $this-> corPena;}
    public function  setCorPena($i){$this-> corPena = $i;}

    public function fazerNinho(){
        echo "<p>Construindo ninho</p>";
    }

    public function locomover(){
        echo "<p>Voando</p>";
    }

    public function alimentar(){
        echo "<p>Comendo frutas</p>";
    }

    public function emitirSom(){
        echo "<p>som da Ave</p>";
    }
}