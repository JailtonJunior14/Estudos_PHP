<?php
// i | value

//[0]Jose
//[1]Joao
//[2]Maria
//[3]Joana


$lista_nome = array("Jose","João","Maria","Joana");

//var_dump($lista_nome);

//reset($lista_nome);

$lista_nome_copy = array_reverse($lista_nome);

while(key($lista_nome_copy) !== null){

    echo "OLA, " . current($lista_nome_copy) . "<br/>";

    next($lista_nome_copy);

}

echo "<hr/>";

foreach($lista_nome as $nome){

    echo "Ola, " . $nome . "<br/>" ;
}