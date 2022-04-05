<?php
    class Pessoa
    {
        private $nome;
        private $idade;
        private $sexo;


        public function getNome(){ return $this-> nome;}
        private function getIdade(){ return $this-> idade; }
        private function getSexo(){ return $this-> sexo;}

        private function setNome($i) { $this->nome = $i;}
        private function setIdade($i) { $this->idade = $i;}
        private function setSexo($i) { $this->sexo = $i;}

        public function __construct($no, $idade, $s)
        {
            $this-> nome = $no;
            $this-> idade = $idade;
            $this-> sexo = $s;
        }

        public function fazerAniver()
        {
            $this->setIdade($this->getIdade() + 1);
        }
    }
