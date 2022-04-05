<?php
    require_once "Pessoa.php";
    class Aluno extends Pessoa3
    {
        private $matricula;
        private $curso;

        public function pagarMensalidade(){
            echo "<p>Pagando mensalidade do aluno {$this->getNome()}</p>";
        }
        public function getMatricula(){return $this->matricula;}
        public function getCurso(){return $this->curso;}
        public function setMatricula($i){$this->matricula = $i;}
        public function setCurso($i){$this->curso = $i;}

    }
