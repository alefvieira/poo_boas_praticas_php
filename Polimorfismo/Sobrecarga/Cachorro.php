<?php

require_once "Lobo.php";
class Cachorro extends Lobo{

    public function reagirFrase($frase) {
        if('agradavel' === $frase ) echo '<br>Abanar e latir';
        elseif('agressiva' === $frase) echo '<br>rosnar';
    }

    public function reagirHora($horario) {
        if($horario <= 12 ) echo '<br>Abanar';
        elseif(($horario > 12) && ($horario <= 18)) echo '<br>abar e latir';
        elseif(($horario > 18) && ($horario <= 24)) echo '<br>ignorar';
    }

    public function reagirDono($dono) {
        if($dono === true ) echo '<br>Abanar';
        elseif($dono === false ) echo '<br>rosnar e latir';
    }

    public function reagirIdade($idade) {
        if( $idade < 5 ) echo '<br>abanar';
        elseif($idade < 7) echo '<br>latir';
        elseif($idade <= 10) echo '<br>rosnar';
        elseif($idade > 10) echo '<br>ignorar';
    }


    public function enterrarOsso()
    {
        echo "Osso enterrado";
    }

    public function abanarRabo()
    {
        echo "Cachorro abanando o rabo";
    }
}

