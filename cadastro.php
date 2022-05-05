<?php
require 'class/user.class.php';
$user = new Usuarios();

if(isset($_POST['nome']) && isset($_POST['email'])  && isset($_POST['password']) && isset($_POST['cpf']) && !empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['cpf'])) {
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['password']);
    $cpf = addslashes($_POST['cpf']);
    $user->cadastrar($nome, $email, $senha, $cpf);
} else {
    echo 'error';
}
?>