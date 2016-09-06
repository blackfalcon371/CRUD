<?php
if(isset($_POST["submit"])){
$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "cadastro"; 
$registro=$_POST['registro'];   
$nome=$_POST['nome'];
//$email=$_POST['email'];
//$idade=$_POST['idade'];
//$profissao=$_POST['profissao'];
try {
  $pdo = new PDO("mysql:host=$servidor; dbname=$database", $usuario, $senha);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
  $sql="UPDATE login SET nome = '$nome' WHERE registro = '$registro'";
     $pdo->exec($sql);
    echo "Dados atualizados com sucesso";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
}
$pdo=null;
?>