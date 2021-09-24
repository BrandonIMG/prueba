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
        <form action="ticket.php" method="POST" class="container">
            <legend>Ingrese sus datos para facturar</legend>
            <div class="form-group">
                <label for="rfc">RFC</label>
                <input type="text" name="rfc" id="rfc" class="form-control" placeholder="RFC">
            </div>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre">
            </div>
            <div class="form-group">
                <label for="mail">Correo electrónico</label>
                <input type="mail" name="mail" id="mail" class="form-control" placeholder="Correo electrónico">
            </div>
            <div class="form-group">
                <label for="pago">Forma de Pago</label>
                <input type="text" name="pago" id="pago" class="form-control" placeholder="Forma de Pago">
            </div>
            <div class="form-group">
                <label for="address">Dirección</label>
                <input type="text" name="address" id="adress" class="form-control" placeholder="Direccion">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea name="descripcion" id="descripcion" cols="30" rows="10" placeholder="Descripcion de producto" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="iva">IVA</label>
                <input type="number" name="iva" id="iva" class="form-control" placeholder="IVA">
            </div>
            <div class="form-group">
                <label for="descuento">Descuento</label>
                <input type="number" name="descuento" id="descuento" class="form-control" placeholder="Descuento">
            </div>
            <div class="form-group">
                <label for="total">Total</label>
                <input type="number" name="total" id="total" class="form-control" placeholder="Total">
            </div>

            <input type="submit" value="Generar" class="btn btn-primary justify-item-end">
        </form>
    </div>
        <script src="js/jquery.slim.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>
</body>
</html>