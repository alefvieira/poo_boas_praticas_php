<?php
    require_once "./Interfaces/Publicacao.php";
    require_once "Pessoa.php";


    class Livro implements Publicacao
    {
        private $titulo;
        private $autor;
        private $totPag;
        private $pagAtual;
        private $aberto;
        private $leitor;

        private function getTitulo(){return $this-> titulo;}
        private function getAutor(){return $this-> autor;}
        private function getTotPag(){return $this-> totPag;}
        private function getPagAtual(){return $this-> pagAtual;}
        private function getAberto(){return $this-> aberto;}
        private function getLeitor(){return $this-> leitor;}

        private function setTitulo($n){ $this-> titulo = $n;}
        private function setAutor($n){ $this-> autor = $n;}
        private function setTotPag($n){ $this-> totPag = $n;}
        private function setPagAtual($n){ $this-> pagAtual = $n;}
        private function setAberto($n){ $this-> aberto = $n;}
        private function setLeitor($n){ $this-> leitor = $n;}

        public function __construct($titulo, $autor, $totPag, $leitor)
        {
            $this-> titulo = $titulo;
            $this-> autor = $autor;
            $this-> totPag = $totPag;
            $this-> leitor = $leitor;
            
            $this-> pagAtual = 0;
            $this-> aberto = $false;

        }

        public function detalhes()
        {

        }

        public function abrir()
        {
            $this-> setAberto(true);
        }
        public function fechar()
        {
            $this-> setAberto(false);
        }
        public function folhear($p)
        {
            if($p > $this->totPag){
                $this->pagAtual = 0;
            }else{
                $this->getPagAtual = $p;
            }
        }
        public function avancarPag()
        {
            if(getPagAtual() < getTotPag()){
                $this-> setPagAtual(getPagAtual()+1);

            }
            
        }
        public function voltarPag()
        {
            if(getPagAtual() > 0 ){
                $this-> setPagAtual(getPagAtual()-1);

            }
            
        }
    }

