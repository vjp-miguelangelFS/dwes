<!-- View de la página home -->

<!-- Llamo a los partials que contiene el head y el nav de la página -->
<?php include __DIR__ . '/partials/inicio-doc.part.php' ?>

<?php include __DIR__ . '/partials/nav.part.php' ?>

<!-- Principal Content Start -->
<div id="index">

  <!-- Header -->
  <div class="row">
    <div class="col-xs-12 intro">
      <div class="carousel-inner">
        <div class="item active">
          <img class="img-responsive" src="images/index/woman.jpg" alt="header picture">
        </div>
        <div class="carousel-caption">
          <h1>FIND NICE PICTURES HERE</h1>
          <hr>
        </div>
      </div>
    </div>
  </div>

  <div id="index-body">
    <!-- Pictures Navigation table -->
    <div class="table-responsive">
      <table class="table text-center">
        <thead>
          <tr>
            <td><a class="link active" href="#category1" data-toggle="tab">category I</a></td>
            <td><a class="link" href="#category2" data-toggle="tab">category II</a></td>
            <td><a class="link" href="#category3" data-toggle="tab">category III</a></td>
          </tr>
        </thead>
      </table>
      <hr>
    </div>

    <!-- Navigation Table Content -->
    <div class="tab-content">

      <!-- First Category pictures -->
      <!-- Llamo al partial imageGaleria y declaro 3 variables para crear un galeria de imagenes en la página web, ente proceso lo repito 3 veces -->
      <?php
      if ($arrayVacioImagenes == true) {
        print "<h1>Error, no hay imagenes en la categoria 1</h1>";
      } else {
        $idCategoria = 'category1';
        $categoriaActiva = 'active';
        shuffle($arrayImagenes);

        include __DIR__ . '/partials/imagegallery.part.php';
      }



      ?>

      <!-- End of First category pictures -->

      <!--second category pictures -->
      <!-- Segunda categoria  -->
      <?php

      if ($arrayVacioImagenes == true) {
        print "<h1>Error, no hay imagenes en la categoria 2</h1>";
      } else {
        $idCategoria = 'category2';
        $categoriaActiva = '';
        shuffle($arrayImagenes);

        include __DIR__ . '/partials/imagegallery.part.php';
      }



      ?>

      <!-- End of second category pictures -->

      <!-- Third Category Pictures -->
      <!-- Tercera categoria  -->
      <?php

      if ($arrayVacioImagenes == true) {
        print "<h1>Error, no hay imagenes en la categoria 3</h1>";
      } else {
        $idCategoria = 'category3';
        $categoriaActiva = '';
        shuffle($arrayImagenes);

        include __DIR__ . '/partials/imagegallery.part.php';
      }
      ?>

      <!-- Third Category Pictures -->

    </div>
    <!-- End of Navigation Table Content -->
  </div><!-- End of Index-body box -->

  <!-- Newsletter form -->
  <div class="index-form text-center">
    <h3>SUSCRIBE TO OUR NEWSLETTER </h3>
    <h5>Suscribe to receive our News and Gifts</h5>
    <form class="form-horizontal">
      <div class="form-group">
        <div class="col-xs-12 col-sm-6 col-sm-push-3 col-md-4 col-md-push-4">
          <input class="form-control" type="text" placeholder="Type here your email address">
          <a href="" class="btn btn-lg sr-button">SUBSCRIBE</a>
        </div>
      </div>
    </form>
  </div>
  <!-- End of Newsletter form -->

  <style>
    .text-muted.text-left img {
      height: 80px;
      width: 80px;
    }
  </style>
  <!-- Box within partners name and logo -->
  <?php
  // Llamo al partial asociados para crear la lista de Asociados
  include_once "partials/asociados.part.php";
  ?>
  <!-- End of Box within partners name and logo -->

</div><!-- End of index box -->

<!-- Footer -->
<footer class="home-page">
  <div class="container text-muted text-center">
    <div class="row">
      <ul class="nav col-sm-4">
        <li class="footer-number"><i class="fa fa-phone sr-icons"></i> (00228)92229954 </li>
        <li><i class="fa fa-envelope sr-icons"></i> kouvenceslas93@gmail.com</li>
        <li>Photography Fanatic Template &copy; 2017</li>
      </ul>
      <ul class="list-inline social-buttons col-sm-4 col-sm-push-4">
        <li><a href="#"><i class="fa fa-facebook sr-icons"></i></a>
        </li>
        <li><a href="#"><i class="fa fa-twitter sr-icons"></i></a>
        </li>
        <li><a href="#"><i class="fa fa-google-plus sr-icons"></i></a>
        </li>
      </ul>
    </div>
  </div>
</footer>
<!-- Llamo al partial con los scripts finales de la página -->
<?php include __DIR__ . '/partials/fin-doc.part.php' ?>