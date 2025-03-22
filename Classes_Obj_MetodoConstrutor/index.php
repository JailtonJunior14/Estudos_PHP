<?php

include 'Animal.php';

$pet = new Animal("Beethoven", "Border Collie", "Preto e Branco");
$pet->apresentacao();
$pet->dorme();
$pet->come("Petisco");


echo "<hr/ >";


echo $pet->nome;

////////

var_dump($pet);

///////////////////////////////////////
 
echo "<hr/ >";

$pet = new Animal("Lobo", "Vira-Lata", "Caramelo");
$pet->apresentacao();
$pet->dorme();
$pet->come("Carne");


echo "<hr/ >";


echo $pet->nome;


echo "<hr/ >";

/////////////////////////////////////
var_dump($pet);
