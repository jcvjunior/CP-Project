<?php

class Acesso{
    protected static $db; 
    private function __construct(){
        $db_host = "localhost";
        $db_database = "cyber_punk";
        $db_usuario = "root";
        $db_senha = "";
        $db_driver = "mysql";

        try{
            self::$db = new PDO("$db_driver:host=$db_host; dbname=$db_database", $db_usuario, $db_senha);
            # Permite ao PDO lançar exceções durante erros.
            self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            # Dados armazenados com codificação UTF-8
            self::$db->exec('SET NAMES utf8');
        }
        catch (PDOException $e)
        {            
            # Parar carregamento da página
            die("Connection Error: " . $e->getMessage());
        }
    }

    public static function conexao(){
        if (!self::$db)
        {
            new Acesso;
        }
        return self::$db;
    }
}
