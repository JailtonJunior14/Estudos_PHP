<!--
classe = planta, da arquitetura
    - atributos = caracteristicas
    - métodos = ações

Objeto = casa



-->

<?php

include 'Animal.php';

/*$pet = new Animal("Beethoven", "Border Collie", "Preto e Branco");
$pet->apresentacao();
$pet->dorme();
$pet->come("Petisco");

echo "<hr/ >";

echo $pet->nome;

var_dump($pet);

echo "<hr/ >";

// $pet = new Animal("Lobo", "Vira-Lata", "Caramelo");
// $pet->apresentacao();
// $pet->dorme();
// $pet->come("Carne");

// echo "<hr/ >";

// echo $pet->nome;

// echo "<hr/ >";

// var_dump($pet);

$pet = new Animal("Tom", "Gato", "Preto e Branco");
$pet->apresentacao();
$pet->dorme();
$pet->come("Wiskas");*/

echo "<hr/ >";





try{

    include "Gato.php";

    $pet2 = new Gato("Garfield","Gato","Laranja");
    $pet2->dorme();
    $pet2->come("Lasanha");
    $pet2->miar();

    echo "<hr/>";

    include "Cachorro.php";

    $pet3 = new Cachorro("Beethoven","Border Collie","Preto e Branco");
    $pet3->dorme();
    $pet3->come("Petisco");
    $pet3->latir();




} catch(Exception $e){
    echo $e->getMessage();
}




