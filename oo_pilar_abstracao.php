<?php
  /*  
    class Funcionario {

        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;
        public $salario = null;

        //getters setters
        
        function setNome($nome) {
            $this->nome = $nome;
        }

        function setNumFilhos ($numFilhos) {
            $this->numFilhos = $numFilhos;
        }

        function getNome() {
            return $this->nome;
        }

        function getNumFilhos() {
            return $this->numFilhos;
        }

        //métodos
        function resumirCardFunc() {
            return "$this->nome possui $this->numFilhos filhos";
        }

        function modificarNumFilhos($numFilhos) {
            //afetar um atributo do objeto
            $this->numFilhos = $numFilhos;
        }
        
    }

    $y = new Funcionario();
    $y->setNome(' José ');
    $y->setNumFilhos(2);
    //echo $y->resumirCardFunc();
    echo $y->getNome(). 'possui ' . $y->getNumFilhos() . ' filho(s)';

    echo '<br/>';

    $x = new Funcionario();
    $x->setNome(' Maria ');
    $x->setNumFilhos(0);
    echo $x->getNome() . ' possui ' . $x->getNumFilhos() . ' filho(s)';

*/

class Funcionario {

    //atributos
    public $nome = null;
    public $telefone = null;
    public $numFilhos = null;
    public $cargo = null;
    public $salario = null;

    //getters setters (overloading / sobrecargar)
    function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }

    function __get($atributo) {
        return $this->$atributo;
    }


        //métodos
        function resumirCardFunc() {
            return $this-> __get('nome') .  " possui " . $this-> __get('numFilhos') . ' filhos';
        }

        function modificarNumFilhos($numFilhos) {
            //afetar um atributo do objeto
            $this->numFilhos = $numFilhos;
        }
        
}

    $y = new Funcionario();
    $y-> __set('nome', 'José');
    $y-> __set('numFilhos', 2);
    echo $y->resumirCardFunc();
    //echo $y-> __get('nome'). ' possui ' . $y->__get('numFilhos') . ' filho(s)';

    echo '<br/>';

    $x = new Funcionario();
    $x->__set('nome', 'Maria');
    $x-> __set('numFilhos', 0);
    echo $x->resumirCardFunc();
    //echo $x-> __get('nome') . ' possui ' . $x-> __get('numFilhos') . ' filho(s)';

    echo '<br/>';

    $p = new Funcionario();
    $p-> __set('nome', 'Vinicius');
    $p-> __set('cargo', 'Desenvolvedor_PHP');
    //echo $p-> __get('nome') . ' possui ' . 'cargo de ' . $p-> __get('cargo');

    echo '<br/>';

    $sl = new Funcionario();
    $sl-> __set('nome', 'Vinicius');
    $sl-> __set('salario', '3.500');
    //echo $sl-> __get('nome') . ' possui ' . 'salario de ' . $sl-> __get('salario');

?>