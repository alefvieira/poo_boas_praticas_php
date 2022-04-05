<?php
    require_once "Pessoa.php";

    class Professor extends Pessoa2
    {
        private $especialidade;
        private $salario;

        public function getEspecialidade() {return $this->especialidade;}
        public function getSalario() { return $this->salario;}

        public function setEspecialidade($i) {$this->especialidade = $i;}
        public function setSalario($i) {$this->salario = $i;}

        // public function __construct($espec, $salario)
        // {
        //     $this->especialidade = $espec;
        //     $this->salario = $salario;
        // }
        public function receberAum($aum)
        {
            $this->setSalario($this->getSalario() + $aum);
        }
    }
