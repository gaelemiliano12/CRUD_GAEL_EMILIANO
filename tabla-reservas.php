<?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "digitalnexus";

  // Crear conexión
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Comprobar conexión
  if ($conn->connect_error) {
    die("La conexión a la base de datos falló: " . $conn->connect_error);
  }

  $sql = "SELECT id, nombre_usuario, equipo, fecha_inicio, hora_inicio, fecha_finalizacion, hora_finalizacion FROM reservas";
  $result = $conn->query($sql);
  ?>

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Ollie landing page.">
    <meta name="author" content="Devcrud">
    <title>Tabla de Reporte</title>

    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    
    <!-- owl carousel -->
    
    <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.theme.default.css">

    <!-- Bootstrap + Ollie main styles -->
	<link rel="stylesheet" href="assets/css/ollie.css">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <nav id="scrollspy" class="navbar navbar-light bg-light fixed-top" data-spy="affix" data-offset-top="20">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="assets/imgs/brand.svg" alt="" class="brand-img"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            
                    
                </ul>
            </div>
        </div>
    </nav>
</body> 

<header class="header header-mini"> 
    <div class="header-title">Tabla de todos las reservas</div> 
    <nav aria-label="breadcrumb">
       <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Aqui se puede modificar los datos de las reservas o simplemente borrarlos.</a></li>
       </ol>
    </nav>
 </header> 

 <div class="py-5">

  <div style="text-align: center;">
    <table  class="table table-bordered" style="width: 70%; margin: 0 auto; border-collapse: collapse; border: 1px solid #ccc;">
      <thead>
        <tr>
          <th scope="col" style="border: 1px solid #ccc; padding: 8px;">ID</th>
          <th scope="col" style="border: 1px solid #ccc; padding: 8px;">NOMBRE DEL USUARIO</th>
          <th scope="col" style="border: 1px solid #ccc; padding: 8px;">EQUIPO</th>
          <th scope="col" style="border: 1px solid #ccc; padding: 8px;">FECHA DE INICIO</th>
          <th scope="col" style="border: 1px solid #ccc; padding: 8px;">HORA DE INICIO</th>
          <th scope="col" style="border: 1px solid #ccc; padding: 8px;">FECHA DE FINALIZACIÓN</th>
          <th scope="col" style="border: 1px solid #ccc; padding: 8px;">HORA DE FINALIZACIÓN</th>
          <th scope="col" style="border: 1px solid #ccc; padding: 8px;">ACCIONES</th>
        </tr>
      </thead>
      <tbody>

        <?php
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td style='border: 1px solid #ccc; padding: 8px;'>" . $row["id"] . "</td>";
            echo "<td style='border: 1px solid #ccc; padding: 8px;'>" . $row["nombre_usuario"] . "</td>";
            echo "<td style='border: 1px solid #ccc; padding: 8px;'>" . $row["equipo"] . "</td>";
            echo "<td style='border: 1px solid #ccc; padding: 8px;'>" . $row["fecha_inicio"] . "</td>";
            echo "<td style='border: 1px solid #ccc; padding: 8px;'>" . $row["hora_inicio"] . "</td>";
            echo "<td style='border: 1px solid #ccc; padding: 8px;'>" . $row["fecha_finalizacion"] . "</td>";
            echo "<td style='border: 1px solid #ccc; padding: 8px;'>" . $row["hora_finalizacion"] . "</td>";
            echo '<td style="border: 1px solid #ccc; padding: 8px;">
              <a href="editar-reservas.php?id=' . $row["id"] . '" class="btn btn-primary btn-sm">Editar</a>
              <a href="eliminar-reservas.php?id=' . $row["id"] . '" class="btn btn-primary btn-sm" onclick="return confirm(\'¿Estás seguro de que desea eliminar este registro?\')">Eliminar</a>
            </td>';
            echo "</tr>";
          }
        } else {
          ?>
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
             No se ha encontrado datos o información.
    
             </div>
    
          <?php
        }
        $conn->close();
        ?>
      </tbody>
    </table>
  </div>

  
  <div class="pie-form">
  <div class="py-5">
  <a class="nav-link btn btn-primary" href="reservas.php">Volver</a>
 </div>

 	<!-- core  -->
   <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
	<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>
    
    <!-- Owl carousel  -->
    <script src="assets/vendors/owl-carousel/js/owl.carousel.js"></script>


    <!-- Ollie js -->
    <script src="assets/js/Ollie.js"></script>