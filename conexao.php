<?php 

$servername = "localhost";
$username = "id20521290_bancodedadosggizi";
$password = "\?)Z%a{W8a&E->8F";
$db = "id20521290_marcaohjhj";


$conn = new mysqli($servername,$username, $password,$db);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Conectado com sucesso";
?>