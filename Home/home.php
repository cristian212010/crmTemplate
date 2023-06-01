<?php
require_once("../Login/LoginUser.php");
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home </title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


  <link rel="stylesheet" type="text/css" href="home.css">

</head>

<body>
  <div class="contenedor">

    <div class="parte-izquierda">

      <div class="perfil">
        <h3 style="margin-bottom: 2rem;">Camp Skiller.</h3>
        <img src="images/Diseño sin título.png" alt="" class="imagenPerfil">
        <h3 >
          <?php
          echo $_SESSION['username'];
          ?>
        </h3>
      </div>
      <div class="menus">
        <a href="home.php" style="display: flex;gap:2px;">
          <i class="bi bi-house-door"> </i>
          <h3 style="margin: 0px;font-weight: 800;">Home</h3>
        </a>
        <a href="../Estudiantes/estudiantes.php" style="display: flex;gap:2px;">
          <i class="bi bi-people"></i>
          <h3 style="margin: 0px;">Estudiantes</h3>
        </a>
      
        </a>
        <a href="/login/login.php" style="display: flex;gap:2px;color: brown;">
          <i class="bi bi-x-square"></i>
          <h3 style="margin: 0px;">salir</h3>
        </a>


      </div>
    </div>

    <div class="parte-media">
        <h2 class="m-2">Promedio</h2>
      <div class="menuTabla contenedor2">
        <div id="charts1" class="charts"> </div>
      </div>
    </div>

    
    <div class="parte-derecho ">
      <p>Cargando...</p> 
    </div>



  </div>













  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>

  <!-- APACHE Echars -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/5.4.2/echarts.min.js"></script>


  <script src="home.js"></script>

</body>

</html>