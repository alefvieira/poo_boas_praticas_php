<?php

    require_once "Objeto_Heranca/Pessoa.php";
    require_once "Objeto_Heranca/Aluno.php";
    require_once "Objeto_Heranca/Professor.php";
    require_once "Objeto_Heranca/Funcionario.php";

    //$people[0] = new Pessoa2("Carlos Vieira", 23, 'M');
    $p1 = new Pessoa2();
    $p2 = new Aluno();
    $p3 = new Professor();
    $p4 = new Funcionario();

    $p1->setNome("Álef");
    $p1->setIdade("25");
    $p1->setSexo("M");

    $p2->setNome("João");
    $p2->setCurso("Tecnologia da Informação");

    $p3->setNome("Gabriel");
    $p3->setSalario(2500);

    $p4->setNome("Thyago");
    $p4->setIdade(23);
    $p4->setSexo("M");

    $p3->receberAum(550.8);
    $p4->mudarTrabalho();
    $p2->cancelarMatr();
    var_dump($p1);
    var_dump($p2);
    var_dump($p3);
    var_dump($p4);



    // var_dump($people[0]);

     
