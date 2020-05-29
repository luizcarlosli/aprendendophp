<?php 

$servername = "localhost"; // Local padrão para servidor local
$db = "testeclasse"; // Nome do banco de dados cadastrado no MySql
$username = "root"; // Por ser servidor local o username padrão é root
$password = ""; // Por ser servidor local a senha é vazia
// Criando a connection
$conexao = mysqli_connect($servername, $username, $password, $db);

?>