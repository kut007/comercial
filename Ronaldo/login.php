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

if (
        strlen($usuario) >= 4 && strlen($usuario) <= 15 && strlen($senha) >= 4 && strlen($senha) <= 15
    ) {

        $usuarioValido = ($usuario == "PROFESSOR" || $usuario == "COORDENADOR");
        $senhaValida = ($senha == "DEVISATE");

        if (!$usuarioValido && !$senhaValida) {
            echo "Erro: nome de usuário e senha invalidos";
        }
        else if (!$usuarioValido) {
            echo "Erro: nome de usuário invalido";
        }
        else if (!$senhaValida) {
            echo "Erro: senha incorreta";
        }
   }
?>

<form method="POST">

Usuário:<br>
<input type="text" name="usuario"><br><br>

Senha:<br>
<input type="text" name="senha"><br><br>

<input type="submit" value="Entrar">

</form>