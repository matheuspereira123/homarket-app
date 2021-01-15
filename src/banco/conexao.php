<?php 

    date_default_timezone_set("America/Sao_Paulo");

    $host  = 'localhost';
    $user  = 'root';
    $senha = 'root';
    $banco = 'homarket';

    $conexao = mysqli_connect($host, $user, $senha, $banco);