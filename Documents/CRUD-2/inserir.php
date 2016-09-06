<?php
if(isset($_POST["submit"])){
$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "cadastro";

try {
    $pdo = new PDO("mysql:host=$servidor;dbname=$database", $usuario, $senha);
  
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO login (nome, email, idade, profissao)
    VALUES ('".$_POST["nome"]."','".$_POST["email"]."','".$_POST["idade"]."','".$_POST["profissao"]."')";
 
    $pdo->exec($sql);
    echo "Cadastro criado com sucesso";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
}

$pdo = null;
?>