<?php

include "./oceania_data.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>OCEANIA</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Free HTML Templates" name="keywords">
  <meta content="Free HTML Templates" name="description">

  <!-- Favicon -->
  <link href="../../img/logo1.png" rel="icon">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="./lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="./css/style.css" rel="stylesheet">
</head>

<body>
  <!-- Navbar Start -->
  <div class="container-fluid nav-bar p-0">
    <div class="container-lg p-0">
      <nav class="navbar navbar-expand-lg bg-secondary navbar-dark">
        <a href="index.html" class="navbar-brand">
          <img src="./IMG/l1.png" class="logo"> <!-- Agrega la clase "logo" aquí -->
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
          <div class="navbar-nav ml-auto py-0">
            <a href="../fifa.html" class="nav-item nav-link active">Regresar</a>
          </div>
        </div>
      </nav>
    </div>
  </div>

  <!-- Carousel Start -->
  <div class="container-fluid p-0 mb-5">
    <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#header-carousel" data-slide-to="1"></li>
        <li data-target="#header-carousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="img-fluid" src="<?php echo $oceanicConfederation->sello; ?>" alt="Bandera de <?php echo $pais->nombre; ?>" width="100%">
          <div class="carousel-caption d-flex align-items-center justify-content-center">
            <div class="p-5" style="width: 100%; max-width: 900px;">
              <h1 class="display-3 text-white mb-md-4">OFC</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Carousel End -->

  <style>
    body {
      overflow-x: hidden;
    }

    table td,
    table th {
      text-overflow: ellipsis;
      white-space: nowrap;
      overflow: hidden;
    }

    thead th {
      color: #fff;
    }

    .card {
      border-radius: .5rem;
    }

    .table-scroll {
      border-radius: .5rem;
    }

    .table-scroll table thead th {
      font-size: 1.25rem;
    }

    thead {
      top: 0;
      position: sticky;
    }

    .row {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
    }

    /* Estilos para los bloques "Países", "Continente" y "ONG" */
    .col-md-4 {
      flex: 0 0 320px;
      padding: 20px;
      border-radius: 10px;
      background-color: #ffffff;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .col-md-4:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .col-md-4 h4 {
      color: #007bff;
      font-size: 1.6rem;
      margin-bottom: 10px;
    }

    .col-md-4 p {
      color: #444;
      font-size: 1.1rem;
      line-height: 1.6;
    }

    .col-md-4 i {
      color: #007bff;
      margin-right: 15px;
    }
  </style>

<section id="about" class="about">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Sello y Máximo de Países</h2>
    </div>

    <div class="bg-imag" style="background-color: #f5f7fa;">
      <div class="mask d-flex align-items-center">
        <div class="container" style="margin: 50px;">
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="card">
                <div class="card-body p-0">
                  <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true" style="position: relative;">
                    <table class="table table-striped mb-0">
                      <tbody>
                        <?php
                        echo '<tr>';
                        echo '<th style="text-align: center; background-color: #EC7063;">Sello</th>';
                        echo '<th style="text-align: center; background-color: #EC7063;">Máximo de Países</th>';
                        echo '</tr>';

                        echo '<tr>';
                        echo '<td><img class="img-fluid" src="' . $oceanicConfederation->sello . '" width="50%"></td>';
                        echo '<td>' . $oceanicConfederation->maxPaises . '</td>';
                        echo '</tr>';
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- End About Section -->


  <!-- Footer Start -->
  <div class="container-fluid bg-secondary text-white mt-5 pt-5 px-sm-3 px-md-5">
    <div class="row pt-5">
      <div class="col-lg-3 col-md-6 mb-5">
        <div class="d-flex justify-content-start mt-4">
          <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
          <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
          <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
          <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid py-4 px-sm-3 px-md-5">
    <p class="m-0 text-center">
      &copy; <a class="font-weight-semi-bold" href="#">Your Site Name</a>. All Rights Reserved. Designed by
      <a class="font-weight-semi-bold" href="https://htmlcodex.com">HTML Codex</a>
    </p>
  </div>
  <!-- Footer End -->


  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-up"></i></a>

  <script>
    function toggleTable() {
      var table = document.getElementById("nzTable");
      if (table.style.display === "none") {
        table.style.display = "table-row-group";
      } else {
        table.style.display = "none";
      }
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="./lib/easing/easing.min.js"></script>
  <script src="./lib/waypoints/waypoints.min.js"></script>
  <script src="./lib/counterup/counterup.min.js"></script>
  <script src="./lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Javascript -->
  <script src="./js/main.js"></script>
</body>

</html>