<?php
// classe abstrata não pode ser instanciada
    abstract class Pessoa3 
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
    
        public function fazerNiver(){
            $this->setIdade(1 + $this->getIdade());
        }
    }