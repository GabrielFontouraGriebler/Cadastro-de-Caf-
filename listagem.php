<?php

$servername = "localhost";
$database = "cafe";
$username = "root";
$password = "";

$conn = mysqli_connect ($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());

}

echo "<center>Lista de Cadastros de Café<center><br><br>";
echo "<a href='index.html'>Retornar a tela de Cadastro</a><br><br>";



$query = "SELECT id, Nome, Tipo, Local, Categoria, Quantidade FROM cadastro";

$query = mysqli_query ($conn, $query) or die (mysqli_error ($conn));

while  ($row = mysqli_fetch_array( $query)) 
{
    echo "ID: " . $row['id'] . "<br>";
    echo "Nome: " . $row['Nome'] . "<br>";
    echo "Tipo: " . $row['Tipo'] . "<br>";
    echo "Local: " . $row['Local'] . "<br>";
    echo "Categoria: " . $row['Categoria'] . "<br>";
    echo "quantidade: " . $row['Quantidade'] . "<br>";
    echo "<a href='apagar.html'>Apagar</a><br>";
    echo "<a href='editar.html'>Editar</a><br><br><hr>";
}

mysqli_close($conn);




?>