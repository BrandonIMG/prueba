<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <title>Carolina Spa</title>
</head>
<body class="container">

<nav class="navbar navbar-expand-lg navbar-light bg-light mt-3">
  <a class="navbar-brand" href="#">
      <img src="img/logo.png" alt="logo" class="img-fluid" width="100" height="60">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item">
        <a class="nav-link" href="#">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Nosotros</a>
        <li class="nav-item">
        <a class="nav-link" href="#">Contacto</a>
      </li>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Facturación
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Generar Ticket</a>
          <a class="dropdown-item" href="#">Desrcagar Ticket</a>
          <a class="dropdown-item" href="#">Descargar Factura</a>
        </div>
      </li>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


<!-- Formulario que genera el ticket-->
<div class="container">
    <h2>Generar el ticket</h2>
        <form action="usuarios.php" method="POST" class="container">
            <legend>Registrese en nuestra plataforma</legend>

            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" required>
            </div>

            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Apellido" required>
            </div>

            <div class="form-group">
                <label for="telefono">Telefono</label>
                <input type="tel" name="telefono" id="telefono" class="form-control" placeholder="Telefono" required>
            </div>

            <div class="form-group">
                <label for="correo">Correo</label>
                <input type="mail" name="correo" id="correo" class="form-control" placeholder="Correo" required>
            </div>


            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña" required>
            </div>

            <input type="submit" value="Registrar" class="btn btn-success justify-item-end">
        </form>
    </div>
        <script src="js/jquery.slim.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>
</body>
</html>