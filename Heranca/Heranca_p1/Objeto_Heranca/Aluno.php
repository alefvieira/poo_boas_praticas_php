<?php
    require_once "Pessoa.php";
    class Aluno extends Pessoa2
    {
        private  $matr;
        private  $curso;
        private $status;

        public function setMatr($i){$this-> matr = $i;}
        public function setCurso($i){$this-> curso = $i;}
        public function setStatus($i){$this-> status = $i;}
        
        public function getMatr(){return $this-> matr;}
        public function getCurso(){return $this-> curso;}
        public function getStatus(){return $this-> status;}

        public function cancelarMatr(){ $this->setStatus(false);}
        public function AtivarMatr(){ $this->setStatus(true);}

    }