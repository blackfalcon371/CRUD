<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "cadastro";
$registro=$_POST['registro'];
try {
    $pdo = new PDO("mysql:host=$servidor;dbname=$database", $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 
    $sql = "DELETE FROM login WHERE registro='$registro'";

 
    $pdo->exec($sql);
    echo "Dados deletados com sucesso";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$pdo = null;
?>
