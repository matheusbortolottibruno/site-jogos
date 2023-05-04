<?php
include "cabecalho.php";
include "menu.php";

?>
<div class="conteiner">
    <div class="row">
        <div class="col-12 text-center">
            <h1>Cadastrar novo Usuario</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12 text-center">
            <form method="post" action="salvar-usuario.php"> 
                <input name="nome" required placeholder="Nome"> <br> <br>
                <input name="email" type="email" required placeholder="E-mail"> <br> <br>
                <input name="senha" type="password" required placeholder="senha"> <br> <br>
                <button type="submit" class="btn btn-success">salvar usuario</button>

            </form>
        </div>
    </div>
</div>


