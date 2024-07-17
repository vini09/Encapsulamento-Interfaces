<?php

    class Carro extends Veiculo {
        //public $placa = 'ABC1234';
        //public $cor = 'Branco';
        public $teto_solar = true;

        function __construct($placa, $cor) {
            $this->placa = $placa;
            $this->cor = $cor;
        }

       /*function acelerar() {
            echo 'acelerar';
        }
       */ 
        function abrirTetoSolar() {
            echo 'Abrir teto solar';
        }

        function alterarPosicaoVolante() {
            echo 'Alterar posição volante';
        }
    }

    class Moto extends Veiculo {
       // public $placa = 'DEF1122';
       // public $cor = 'Preta';
        public $contraPesoGuiado = true;

        function __construct($placa, $cor) {
            $this->placa = $placa;
            $this->cor = $cor;
        }

       /* function acelerar() {
            echo 'Acelerar';
        }
       */ 
        function empinar() {
            echo 'Empinar';
        }

        function trocarMarcha() {
            echo 'Desengatar a marcha com a mão e engatar marcha com o pé';
        }
    }

    class Veiculo {
        public $placa = null;
        public $cor = null;

        function acelerar() {
            echo 'Acelerar';
        }

        function freiar() {
            echo 'freiar';
        }

        function trocarMarcha() {
            echo 'Desengatar embreagem com o pé e engatar marcha com a mão';
        }
    }

    $carro = new Carro('ABC1234', 'Branco');
    $moto = new Moto('DEF1122', 'Preta');

   $carro->trocarMarcha();
   echo '<br/>';
   $moto->trocarMarcha();
?>