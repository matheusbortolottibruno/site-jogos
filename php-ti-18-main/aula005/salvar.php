<?php
$nome = $_POST["nome"];
$cidade = $_POST["cidade"];

echo "$nome - $cidade";

$arquivo = fopen("clientes.txt","a");

fwrite($arquivo, $nome . "\t" );
fwrite($arquivo, $cidade . "\n");

fclose($arquivo);

header("location:index.php");

?>