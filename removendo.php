<?php

$apagar = $_POST['deletar'];

$servername = "localhost";
$database = "cafe";
$username = "root";
$password = "";

$conn = mysqli_connect ($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());

}

echo "Apagado com sucesso! <br>";
echo "<a href='listagem.php?'>Voltar para lista</a><br>";

$query = "DELETE FROM cadastro where id = '$apagar'";
$query = mysqli_query ($conn, $query) or die (mysqli_error ($conn));

mysqli_close($conn);




?>