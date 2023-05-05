<?php 

$id = $_GET["id"];

include "conexao";

$sql_excluir_jogos = "delete from jogo where id = $id";

$jogo_excluido = mysqli_query ($conexao, $sql_excluir_jogos);

mysqli_close ($conexao);


header ("location:listar-jogos.php?msg-excluir");
?>