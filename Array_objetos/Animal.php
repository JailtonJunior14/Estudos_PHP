<?php

abstract class Animal{

    public $nome;
    public $raca;
    public $cor;

    public function __construct($_nome)
    {
        $this->nome = $_nome;
        /*$this->raca = $_raca;
        $this->cor = $_cor;*/
    }


    public function apresentacao(){
        echo "Nome: " . $this->nome . "<br/>";
        // echo "Raça: " . $this->raca . "<br/>";
        // echo "Cor: " . $this->cor . "<br/>";
         
    }


    public function dorme(){
        echo $this->nome  . " esta dormindo. <br/ >";
    }

    public function come($_comida){
        echo $this->nome . " está comendo: " . $_comida . "<br/>";
    }
}