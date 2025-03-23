<?php

abstract class Animal{

    protected $nome;
    public $raca;
    public $cor;

    public function __construct($_nome, $_raca, $_cor)
    {
        $this->nome = $_nome;
        $this->raca = $_raca;
        $this->cor = $_cor;
    }


    public function apresentacao(){
        echo "Nome: " . $this->nome . "<br/>";
        echo "Raça: " . $this->raca . "<br/>";
        echo "Cor: " . $this->cor . "<br/>";
         
    }


    public function dorme(){
        echo $this->nome  . " esta dormindo. <br/ >";
    }

    public function come($_comida){
        echo $this->nome . " está comendo: " . $_comida . "<br/>";
    }
}