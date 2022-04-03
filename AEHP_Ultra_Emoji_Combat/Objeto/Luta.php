<!-- <pre> -->
<?php
// Só pode ser marcada entre jogadores da mesma categoria
// Desafiado e desafiante devem ser lutadores diferentes.
// Só pode acontecer se a luta for aprovada
// só pode ter como resultado a vitória de um dos lutadores ou o empate

    require_once "Lutador.php";

    class Luta{
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;


        private function getDesafiado() {return $this->desafiado;}
        private function getDesafiante() {return $this-> desafiante;}
        private function getRounds() {return $this-> rounds;}
        private function getAprovada() {return $this-> aprovada;}

        private function setDesafiado($n) {$this-> desafiado = $n; }
        private function setDesafiante($n) {$this-> desafiante = $n;}
        private function setRounds($n) {$this->rounds = $n;}
        private function setAprovada($n) {$this->aprovada = $n;}


        public function marcarLuta($lut1, $lut2)
        {

            if(($lut1->getCategoria() == $lut2->getCategoria()) && ($lut1 != $lut2))
            {
                $this->setAprovada(true);
                $this->setDesafiado($lut1);
                $this->setDesafiante($lut2);
            }
            else // luta não aprovada
            {
                $this->setAprovada(false);
                $this->setDesafiado(null);
                $this->setDesafiante(null);
            }
        }

        // METODO LUTAR
        public function lutar()
        {
            if($this->getAprovada())
            {
                $this->desafiado->status();
                $this->desafiante->status();
                $vencedor = rand(0,2);
                echo $vencedor;
                if($vencedor == 1)
                {
                    // var_dump($this->desafiado);
                    echo "<h3>Vitória do Desafiado {$this->desafiado->getNome()}</h3>";

                    $this->desafiado->ganharLuta(); //lut1
                    $this->desafiante->perderLuta(); //lut2
                }
                else if($vencedor == 2) 
                {
                    // var_dump($this->desafiante);
                    print_r( "<h3>Vitória do Desafiante {$this->desafiante->getNome()}</h3>");
                    $this->desafiante->ganharLuta(); //lut2
                    $this->desafiado->perderLuta(); //lut1
                
                }
                else 
                {
                    echo "<h3>Empate</h3>"; 
                    $this->desafiado->empatarLuta(); //lut1
                    $this->desafiante->empatarLuta(); //lut2
                }

            }
            else 
            {
                echo "<h3> A luta não foi aprovada</h3>";

            }
        }

    }

