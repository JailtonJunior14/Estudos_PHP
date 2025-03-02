<?php

try{
//data source name 

$dsn = "mysql:host=localhost;dbname=phpfilmes";

//PHP Data Object

$conexao = new PDO($dsn, "root", "Juninho@2025");

// statement
$stmt = $conexao->prepare("SELECT * FROM filmes");
$stmt ->execute();

var_dump($conexao);

} catch(Exception $e){
    echo $e->getMessage();
    //echo "<hr/>";
    //var_dump($e->getTrace()); getTrace bom para uso em ambiente de desenvolvivento
}
?>

<table>
    <th>
        <tr>
            <td>ID:</td>
            <td>Nome:</td>
            <td>Genero:</td>
            <td>Ano:</td>
        </tr>
    </th>
    <tbody>
        <?php while($filme = $stmt->fetchObject()): ?>
        <tr>
            <td>   <?= $filme->id  ?> </td>
            <td>  <?= $filme->titulo  ?> </td>
            <td>  <?= $filme->genero  ?> </td>
            <td>  <?= $filme->ano  ?> </td>
        </tr>
        <?php endwhile?>
    </tbody>
</table>