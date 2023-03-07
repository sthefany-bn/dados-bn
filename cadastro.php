<?php

    include "funcao.php";

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $nascimento = $_POST["nascimento"];

    $nascimento_corrigido = implode('/', array_reverse(explode('-', $nascimento)));

    $idade = calcularIdade($nascimento);

    $anoAtual = date("Y");
    $mesAtual = date("m");
    $diaAtual = date("d");

    echo "<!DOCTYPE html>";
    echo "<html lang='pt>'";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<title>Primeiro formulário</title>";
    echo "<link rel='stylesheet' type='text/css' href='estilo.css' media='screen' />";
    echo "</head>";
    echo "<body>";
    echo "<div class='principal'>";
    echo "<p>
    Nome: $nome <br>
    E-mail: $email <br>
    Data de Nascimento: $nascimento_corrigido <br>
    Idade: $idade <br>

    <a href='index.html'>clique aqui</a> para retomar
    </p>";
    echo "</div>";
    echo "</body>";
    echo "</html>";

?>
    
    
    
