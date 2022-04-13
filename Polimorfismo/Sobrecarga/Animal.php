<?php
    abstract class Animal_Sobrecarga
    {
        private $peso;
        private $idade;
        private $membros;

        public function setPeso($i){$this-> peso = $i;}
        public function getPeso(){return $this-> peso ;}

        public function setIdade($i){$this-> idade= $i;}
        public function getIdade(){return $this-> idade;}

        public function setMembros($i){$this-> membros = $i;}
        public function getMembros(){return $this-> membros;}

        abstract public function locomover();
        abstract public function alimentar();
        abstract public function emitirSom();
    }