<?php
include "Gato.php";
// $gato1[0] = new Gato("Tom");  
// $gato2[1] = new Gato("Garfield");
// $gato3[2] = new Gato("Frajola");

$arr_gatos = array(
    new Gato("Tom"),
    new Gato("Garfield"),
    new Gato("Frajola")
);

//var_dump($arr_gatos);

$arr_gatos_size = count($arr_gatos);

for($i=0; $i<$arr_gatos_size; $i++){
    echo "O gato da posição: " . $i . " é: " . $arr_gatos[$i]->nome . "<br/>";
}

echo "<hr/>";


include "Cachorro.php";

$vem_do_db_ficticio = array("Beethoven","Lobo","Nenem");
$vem_do_db_ficticio_size = sizeof($vem_do_db_ficticio);
$arr_cachorros = array();

for($i=0; $i<$vem_do_db_ficticio_size; $i++){

    $arr_cachorros[] = new Cachorro($vem_do_db_ficticio[$i]);
    //var_dump($arr_cachorros);


}

//echo "<hr/>";

for($i=0; $i<$vem_do_db_ficticio_size; $i++){
    echo "O cachorro da posição: " . $i . " é: " . $arr_cachorros[$i]->nome . "<br/>";
}

