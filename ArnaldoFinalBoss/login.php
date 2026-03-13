<?php

if ($_POST) {

//Variaveis Globais
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

//Verificaçao De tamanho

if (strlen($usuario) < 4 || strlen($usuario) > 15) {
        echo "Erro: o nome de usuário deve ter entre 4 e 15 caracteres.";
    }

if (strlen($senha) < 4 || strlen($senha) > 15) {
        echo "Erro: a senha deve ter entre 4 e 15 caracteres.";
    }

}

?>