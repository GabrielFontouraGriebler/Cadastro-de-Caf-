<?php

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



$sql = "INSERT INTO cadastro (Nome, Tipo, Local, Categoria, quantidade) VALUES ('$nome', '$tipo', '$local', '$categoria', $quantidade)";

if (mysqli_query($conn, $sql)) {
    echo "Novo cadastro  criado com sucesso!<br>";
    echo "<a href='index.html'>Voltar para Cadastros</a><br>"; 
}else{
    echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);




?>