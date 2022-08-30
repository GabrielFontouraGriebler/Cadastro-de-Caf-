<?php

$id = $_POST['ID'];
$nome = $_POST['nome'];
$tipo = $_POST['tipo'];
$local = $_POST['local'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];

$servername = "localhost";
$database = "cafe";
$username = "root";
$password = "";

$conn = mysqli_connect ($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());

}

echo "Conectado com sucesso! <br>";
echo "<a href='listagem.php?'>Voltar para lista</a><br>";

$query = "UPDATE cadastro SET Nome = '$nome', Tipo = '$tipo', Local = '$local', Categoria = '$categoria', Quantidade = '$quantidade' WHERE id = $id";
$query = mysqli_query ($conn, $query) or die (mysqli_error ($conn));

mysqli_close($conn);




?>