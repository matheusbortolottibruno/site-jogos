<?php
/*
- criar a conexão com BD
- select na tabela de usuarios com o email e a senha como filtro
- verificar se foi retornado alguma informação
    - se voltar informação é pq usuario e senha existem, mandar pro painel
    - se não retornou nada, não existe usuario ou senha, mandar pra pag. inicial
   
- fechar a conexão*/
include "cabecalho.php";
include "menu.php";

?>
<div class="container">
    <div class="row mt-3">
        <div class="col-12 text-center">
            <h1>Cadastrar Novo Usuário</h1>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12">
            <form action=" salvar-usuario.php" method="post">
                <div class="col-5 mx-auto">
                    <input type="text" name="nome" class="form-control me-2" required placeholder="Nome"> <br>
                    <input type="email" name="email" class="form-control me-2" required placeholder="E-mail"> <br>
                    <input type="password" name="senha" class="form-control me-2" required placeholder="Senha"> <br>
                    <button type="submit" class="btn btn-success">Salvar Usuário</button>

                    <?php
                    $mesagem = $_GET["msg"] ?? "";
                    if ($mesagem == "sucesso") {
                        echo "<em class='text-success'>Usuário e senha cadastrado com sucesso</em>";
                    }
                    ?>
                </div>
            </form>
        </div>
    </div>
</div>