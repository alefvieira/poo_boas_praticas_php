<?php
    require_once "Pessoa.php";
    class Funcionario extends Pessoa2
    {
        private $setor;
        private $trabalhando;

        public function getSetor(){return $this-> setor;}
        public function getTrabalhando(){return $this-> trabalhando;}

        public function setSetor($i) {$this-> setor = $i;}
        public function setTrabalhando($i) {$this-> trabalhando = $i;}


        public function mudarTrabalho()
        {
            $this->setTrabalhando(! $this->getTrabalhando());
        }
    }

