<?php

$nome = $_POST["nome"] ?? "";
$email = $_POST["email"] ?? "";
$telefone = $_POST["telefone"] ?? "";
$estado = $_POST["estado"] ?? "";
$fuma = $_POST["fuma"] ?? "";

echo "Nome: $nome <br>";
echo "E-mail: $email <br>";
echo "Telefone: $telefone <br>";
echo "Estado: $estado <br>";
echo "fuma: $fuma <br>";
?>