<?php

include_once "Animal.php";

class Cachorro extends Animal{

    public function latir(){

        echo $this->nome . " esta latindo ";
    }



}