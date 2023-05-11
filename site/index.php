<?php
include "cabecalho.php";
include "menu.php";

?>

<div class="container-fluid banner">
  <div id="carouselExample" class="carousel slide carousel-fade">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/foto3.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/foto4.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/foto.webp" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

<div class="container mt-2">
  <div class="row">
    <div class="col-12 text-center">
      <h1>Jogos em Destaque</h1>
    </div>
    <div class="col-12 text-center">
      <p>Lorem ipsum, dolor sit amet
        consectetur adipisicing elit.
        Nisi sapiente id ut impedit
        inventore vitae! Dolorum eius,
        in dignissimos amet omnis,
        explicabo voluptates laboriosam
        cumque harum doloremque unde odio adipisci!
      </p>
    </div>

  </div>
  <div class="row">
    <?php
    include "conexao.php";
    $sql_buscar = "select * from jogo";

    $todos_os_jogos = mysqli_query($conexao, $sql_buscar);

    while ($um_jogo = mysqli_fetch_assoc($todos_os_jogos)) :
    ?>
      <div class="col-md-3 text-center mb-4">
        <img src="<?php echo $um_jogo["foto"]; ?>" class="img-fluid">

        <h5 class="mt-3 mb-3"><?php echo $um_jogo["titulo"]; ?></h5>
        <?php
        $cor = "red";
        if (strtoupper($um_jogo["categoria"]) == "AÇÃO") {
          $cor = "red";
        } else if (strtoupper($um_jogo["categoria"]) == "AVENTURA") {
          $cor = "green";
        }
        ?>
        <h5 class="mt-3 mb-3" style="color:<?php echo $cor; ?>"><?php echo $um_jogo["categoria"]; ?></h5>
        <a href="<?php echo $um_jogo["video"]; ?>" class="btn btn-outline-primary">VER-MAIS </a>
      </div>

    <?php
    endwhile;
    mysqli_close($conexao);
    ?>

  </div>
  <div class="container">
    <div class="row mt-5 text-center">
      <di class="col-12 ">
        <h2>Entre em contato</h2>
      </di>
      <di class="col-12 ">
        <p>Lorem ipsum dolor sit amet<br>
          consectetur adipisicing elit. Aut cumque iste<br>
          obcaecati, hic sit nesciunt quam nulla quidem<br>
          voluptatem officia rem ipsam ab cum accusantium<br>
          illum odit quaerat quisquam vel.</p>
      </di>
    </div>
    <div class="row">
      <form action="inserir-contato.php" method="post">
        <div class="col-5 mx-auto">
          <div class="mb-3">
            <input type="text" class="form-control" name="nome" placeholder="Nome">
          </div>
          <div class="mb-3">
            <input type="tel" class="form-control" name="telefone" placeholder="Telefone">
          </div>
          <div class="mb-2">
            <textarea class="form-control" name="duvida" placeholder="Duvida" rows="4"></textarea>
          </div>
          <div class="mb-2 text-center">
            <button type="submit" class="btn btn-success w-50">Entar</button>
          </div>

        </div>

      </form>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>