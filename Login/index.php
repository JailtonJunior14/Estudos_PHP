<?php
session_start();

if(!isset($_SESSION["usuario_logado"]))
    header("Location: login.php");


if(isset($_GET["sair"])){
    unset($_SESSION["usuario_logado"]);
    header("Location: login.php");
}
?>


<h1>Bem vindo a area proibida</h1>


<a href="index.php?sair=true">Sair</a>