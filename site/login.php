<?php
include "conexao.php";

$email = $_POST["email"];
$senha = md5( $_POST["senha"]);


 $sql_buscar_usuario = "select * from usuario where email = '$email' and senha = '$senha'";

 $um_usuario = mysqli_query($conexao, $sql_buscar_usuario);

 if($um_usuario->num_rows > 0){
    header("location:painel.php");

 }else{
    header("location:index.php?msg=erro");
 }
    mysqli_close($conexao);
?>