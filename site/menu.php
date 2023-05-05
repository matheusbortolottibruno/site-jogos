<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-secondary">
    <div class="container-fluid">

      <a class="navbar-brand" href="#">iGame</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

        <span class="navbar-toggler-icon"></span>

      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <!--   <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                 </li>
          -->
        </ul>
        <?php
        $mesagem = $_GET["msg"] ?? "";
        if($mesagem == "erro"){
          echo "<em class='text-danger'>Usuário ou senha inválida</em>";
        }
        ?>
        <form action="login.php" class="d-flex" method="post">
          <input class="form-control me-2" type="email" placeholder="E-mail" aria-label="E-mail" name="email" id="email">

          <input class="form-control me-2" type="password" placeholder="Senha" aria-label="Senha" name="senha" id="senha">
          <button class="btn btn-outline-success me-2" type="submit">Entar</button>
          <a href="novo-usuario.php" class="btn btn-outline-primary me-2">Cadastrar</a>
        </form>
      </div>
    </div>
  </nav>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>