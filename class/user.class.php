<?php
class Usuarios {

    public function cadastrar($nome, $email, $senha, $cpf) {
        global $pdo;
        $sql = $pdo->prepare("SELECT id FROM usuarios WHERE email = :email");
        $sql->bindValue(":email", $email);
        $sql->execute();

        if($sql->rowCount() == 0) {
            $sql = $pdo->prepare("INSERT INTO usuarios SET nome = :nome, email = :email, senha = :senha, cpf = :cpf");
            $sql->bindValue(":nome", $nome);
            $sql->bindValue(":email", $email);
            $sql->bindValue(":senha", md5($senha));
            $sql->bindValue(":cpf", $cpf);
            $sql->execute();

            echo 'cadastrado';
            return true;
        } else {
            echo 'nao cadastrado';
            return false;
        }
    }
    

}