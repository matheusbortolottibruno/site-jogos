/* criar aconexao
- select na tabela de usuarios com o email e a senha como filtro
- verificar se foi retornado alguma informação
- se voltar informação é pq usuario e senha existem, mandar pro painel
- se não retornou nada, não existe usuario ou senha, mandar pra pag. inicial

- fechar a conexão*/

<?php
include"conexao.php";

$email = $_POST["email"];
$senha = $_POST["senha"];

$servidor_bd = "127.0.0.1";
$usuario_bd = "root";
$senha_bd = "";
$banco_de_dados = "delivery_jogos_novo";

$conexao = mysqli_connect($servidor_bd, $usuario_bd, $senha_bd, $banco_de_dados);

$sql_buscar_usuario = "select * form usuario where email = '$email' and senha = '$senha'"; //mudar

$um_usuario = "mysqli_query($conexao, $sql_buscar_usuario)";

if($um_usuario_bd->num_rows > 0){
    header( "location:painel.php");
}else{
    header("location:index.php?msg-erro");
}


mysqli_close($conexao);

?>