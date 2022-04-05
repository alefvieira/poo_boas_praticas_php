<pre>
<?php
    require_once "Objeto/Livro.php";
    require_once "Objeto/Pessoa.php";

    $p[0] = new Pessoa('Pedro', 21, "M");
    $p[1] = new Pessoa('Luiza', 25, "F");

    $l[0] = new LIvro("PHP Básico", "José da Silva", 300, $p[0]);
    $l[1] = new LIvro("PHP Intermediario", "Gustavo da Silva", 533, $p[1]);
    $l[2] = new LIvro("PHP Avançado", "Guilherme da Silva", 338, $p[0]);

    
    $l[0]->abrir();
    $l[0]->folhear(200);
    var_dump($l[0]);
    $l[0]->detalhes();


