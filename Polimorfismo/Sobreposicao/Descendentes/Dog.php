<?php
require_once "Mamifero.php";

class Dog extends Mamifero
{
    public function enterrarOsso()
    {
        echo "Osso enterrado";
    }
    public function abanarRabo()
    {
        echo "Cachorro abanando o rabo";
    }

}