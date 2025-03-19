<?php

// i | value

//[0]Jose
//[1]Joao
//[2]Maria
//[3]Joana


$lista_nome = array();

$lista_nome[] = "Jose";
$lista_nome[] = "João";
$lista_nome[] = "Maria";
$lista_nome[] = "Joana";


echo "O arrrray tem " . count($lista_nome) . " índices.";

//var_dump($lista_nome);
echo "<hr/>";

//echo $lista_nome[3]; Joana

$total_lista_nome = count($lista_nome);

for ($i=0; $i< $total_lista_nome; $i++)
{
    echo "Ola, " . $lista_nome[$i] . "<br/>";
}