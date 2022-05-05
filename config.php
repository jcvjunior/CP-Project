<?php 
session_start();
    global $pdo;

try {
    $pdo = new PDO("mysql:dbname=cyber_punk;host=localhost", "root", "");
} catch(PDOException $e) {
    echo "Error: ".$e->getMessage();
    exit;
}
?>