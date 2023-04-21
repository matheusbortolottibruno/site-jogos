<!-- MENU -->
<?php
include "cabecalho.php";
include "menu.php";
?>


<!--  BANNER -->
<div class="container-fluid banner">
    <div id="carouselExample" class="carousel slide carousel-fade">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/foto.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/foto1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/foto2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/foto3.jpg" class="d-block w-100" alt="...">
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


<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h1>Jogos em destaque</h1>
        </div>
        <div class="col-12 text-center">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit eaque numquam quibusdam dolores iste, aperiam sequi tempore, nesciunt recusandae inventore ipsam. A alias quaerat at doloremque reprehenderit! Culpa, laborum cum!</p>
        </div>
        <div class="row">

            <?php
            for ($i = 0; $i < 8; $i++) :
            ?>
                <div class="col-md-3 text-center mb-4">
                    <img src="img/foto4.jpg" class="img-fluid">
                    <h5 class="mt-3 mb-3">Nome do jogo</h5>
                    <a href="nomedojogo" class="btn btn-primary">VER MAIS</a>
                </div>
            <?php
            endfor;
            ?>
            <!-- <div class="col-3 text-center">
                <img src="img/foto4.jpg" class="img-fluid">
                <h5>Nome do jogos</h5>
                <a href="nomedojogo" class="btn btn-primary">VER MAIS</a>
            </div>
             <div class="col-3 text-center">
                <img src="img/foto5.jpg" class="img-fluid">
                <h5>Nome do jogos</h5>
                <a href="nomedojogo" class="btn btn-primary">VER MAIS</a>
            </div>
            <div class="col-3 text-center">
                <img src="img/foto7.jpg" class="img-fluid">
                <h5>Nome do jogos</h5>
                <a href="nomedojogo" class="btn btn-primary">VER MAIS</a>
            </div>
            <div class="col-3 text-center">
                <img src="img/foto8.jpg" class="img-fluid">
                <h5>Nome do jogos</h5>
                <a href="nomedojogo" class="btn btn-primary">VER MAIS</a>
            </div>
        </div>-->
        </div>
        <div class="row mt-5 ">
            <div class="col-12 text-center">
                <h2>Entre em contato</h2>
            </div>
            <div class="col-12 text-center">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                     Itaque enim culpa, recusandae dignissimos voluptatum nihil,
                      eius cumque, voluptate repudiandae asperiores dolorum
                       quasi quo tenetur nemo ipsam aliquid possimus dolores aliquam?</p>
            </div>
            <div class="row">
                <form action="inserir-contato.php" method="post">
                    <div class="col">
                    <div class="mb-3">


                    <div class="mb-2 ">
  <input type="nome" class="form-control" name="nome" placeholder="Nome">
</div>

<div class="mb-2 ">
<input type="tel" class="form-control" name="telefone" placeholder="Telefone">

</div>
  
<div class="mb-2">
<textarea class="form-control" name="duvida" placeholder="Duvida"  rows="4"></textarea>

</div>

<div class="mb-2 text-center">
    <button type="submit" class="btn btn-success w-25">Entrar</button>
</div>




                    </div>
                </form>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>

    </html>