<?php
    require_once "Aluno.php";
    class Bolsista extends Aluno
    {
        private $bolsa;

        public function getBolsa(){return $this->bolsa;}
        public function setBolsa($i){$this->bolsa = $i;}


        public function renovarBolsa(){
            echo "{$this->getNome()}, sua bolsa foi renovada ";
        }
        
        
        public function pagarMensalidade(){
            echo "{$this->getNome()} é bolsista, então paga com desconto de {$this->getBolsa()}</p>";
        }
    }