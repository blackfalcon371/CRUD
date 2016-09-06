<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "cadastro";
$regstro="13";


$pdo = new mysqli($servername, $username, $password, $dbname);

if ($pdo->connect_error) {
    die("Conexao falhada " . $pdo->connect_error);
} 
$sql = "SELECT registro,nome,email,idade,profissao FROM login";
$result = $pdo->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo "registro: " . $row["registro"]. " - Nome: " . $row["nome"]. " - Email: " . $row["email"]. " - Idade: " . $row["idade"]." -Profissao: " . $row["profissao"]. "<br>";
    }
} else {
    echo "0 results";
}
$pdo->close();
?>