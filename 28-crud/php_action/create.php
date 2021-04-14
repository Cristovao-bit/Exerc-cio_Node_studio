<?php
session_start();

require_once './db_connect.php';

// clear - xss (cross site scripting) / segurança do siste
function clear($input) {
    global $connect;
    // sql
    $var = mysqli_escape_string($connect, $input);
    
    // xss
    $var = htmlspecialchars($var);
    return $var;
}

if(isset($_POST['btn-cadastrar'])):// isset é existir
    // $nome = mysqli_escape_string($connect, $_POST['nome']); refazendo para proteger contra o ataque xss (cross site scripting)
    $nome = clear($_POST['nome']);
    $sobrenome = clear($_POST['sobrenome']);
    $email = clear($_POST['email']);
    $idade = clear($_POST['idade']);
    
    $sql = "INSERT INTO clientes (nome, sobrenome, email, idade) VALUES ('$nome', '$sobrenome', '$email', '$idade')";
    
    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header('Location: ../index.php');
    else:
        $_SESSION['mensagem'] = "Erro ao cadastrar, verifique os dados e cadastre novamente!";
        header('Location: ../index.php');
    endif;
endif;