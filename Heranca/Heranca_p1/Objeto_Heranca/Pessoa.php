<?php
    class Pessoa2
    {
        private $nome;
        private $idade;
        private $sexo;

        public function getNome(){return $this-> nome;}
        public function getIdade(){return $this-> idade;}
        public function getSexo(){return $this-> sexo;}

        public function setNome($i){$this-> nome = $i;}
        public function setIdade($i){$this-> idade = $i;}
        public function setSexo($i){$this-> sexo = $i;}

        public function fazerAniv(){ $this->setIdade($this-> getIdade() + 1);}
    }
