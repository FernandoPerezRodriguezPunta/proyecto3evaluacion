
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>login</title>

    <link rel="icon" type="image/x-icon"  href="favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/heroes/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/checkout/">
    
    <script src="javaScript.js" ></script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


</head>
<body>


<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
      <img src="logo.PNG" class="bi me-2" alt="logo página" width="40" height="32">
    
      </a>

      <ul class="nav nav-pills">
      <li class="nav-item"><a href="./index.php" class="nav-link" >inicio</a></li>
        <li class="nav-item"><a href="./maps.php" class="nav-link">conocenos</a></li>
        <li class="nav-item"><a href="./graficos.php" class="nav-link">Benchmark</a></li>
      </ul>
    </header>
  </div>
  <main>


    <div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="logo.PNG" alt="" width="72" height="57">
      <h2>Formulario de registro</h2>
    </div>

    <div class="row g-5">
      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Datos Personales</h4>
        <form  method="POST">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">nombre</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" name="nombre" pattern="[a-zA-Z]{1,30}"   required>
            
            </div>

            <div class="col-sm-6">
              <label for="dni" class="form-label">dni</label>
              <input type="text" class="form-control" id="dni"  required name="DNI" pattern="[0-9]{8}[A-Za-z]{1}">
            
            </div>


            <div class="col-12">
              <label for="email" class="form-label">email</label>
              <input type="email" class="form-control" id="email"  name="mail" required >
            
            </div>

            <div class="col-12">
              <label for="address" class="form-label">dirección</label>
              <input type="text" class="form-control" id="address" name="direccion" required>
             
            </div>

            <div class="col-12">
              <label for="telefono" class="form-label">teléfono</label>
              <input type="text" class="form-control" id="telefono" name="telefono" pattern="[0-9]{9}"  required>
             
            </div>

            
            <div class="col-12">
              <label for="pass" class="form-label">contraseña</label>
              <input type="text" class="form-control" id="pass" name="clave" title="" pattern="[0-9]{5}$" required>
             
            </div>

             
            <div class="col-12">
              <label for="tarjeta" class="form-label">tarjeta de credito</label>
              <input type="text" class="form-control" id="tarjeta" name="tarjeta"  title="Visa, Mastercard, Discover"   pattern="^(?:4\d([\- ])?\d{6}\1\d{5}|(?:4\d{3}|5[1-5]\d{2}|6011)([\- ])?\d{4}\2\d{4}\2\d{4})$"   required>
             
            </div>

            <div class="col-12">
              <label for="cod_postal" class="form-label">código postal</label>
              <input type="text" class="form-control" id="cod_postal" name="postal"  title="Ejemplo:41002"   pattern="^[0-5][0-9]{3}[0-9]$"  required>
             
            </div>

            
          <button class="w-100 btn btn-primary btn-lg" type="submit" value="Crear cuenta">Enviar</button>
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1"> 2022 &copy; PC Gaming </p>
    <p> Contact@PCGaming.com</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>






           <!--  <form  method="POST" class="login" >
                <h2>Registro</h2>
                *<label>DNI:</label><input type="text" id="dni" placeholder="dni" name="DNI" title="12345678A" pattern="[0-9]{8}[A-Za-z]{1}" required ><br>
               *<label>Nombre:</label><input type="text" id="nombre" placeholder="Nombre" name="nombre" pattern="[a-zA-Z]{1,30}" required ><br>
                *<label>Dirección:</label><input type="text" id="direccion" placeholder="direccion" name="direccion" required><br>
                *<label>telefono</label><input type="text" id="telefono"  placeholder="telefono"  name="telefono" title="admite los formatos '000000000'," pattern="[0-9]{9}"  required><br> 
               * <label>E-mail:</label><input type="email" id="email" placeholder="correo electrónico" name="mail" required><br>
               * <label>Password:</label><input type="password" id="pass" placeholder="Contraseña" name="clave" title="" pattern="[0-9]{5}$" required><br>
               * <label>Tarjeta:</label><input  type="text"   id="tarjeta"  placeholder="tarjeta" name="tarjeta"  title="Visa, Mastercard, Discover"   pattern="^(?:4\d([\- ])?\d{6}\1\d{5}|(?:4\d{3}|5[1-5]\d{2}|6011)([\- ])?\d{4}\2\d{4}\2\d{4})$"   required><br> 
               * <label>Código Postal:</label><input  type="text"   id="postal"  placeholder="Código Postal" name="postal"  title="Ejemplo:41002"   pattern="^[0-5][0-9]{3}[0-9]$"   required><br> 
                <input type="submit" value="Crear cuenta" /></p> 
               
            </form>-->

    
    </main>

 
<?php

require_once("conexionBD.php");
require_once("UsuarioController.php");




 $conn=estableceConexion();

 $controller = new UsuarioController();

 

  if (isset($_POST['mail'])){

    if ( $controller ->creaUsuario($_POST['DNI'],$_POST['nombre'],$_POST['direccion'],$_POST['mail'],$_POST['clave'],$_POST['telefono'],$_POST['postal'],$_POST['tarjeta'])){


      echo "<script>alert('Usuario registrado correctamente')</script>";


    }else{


      echo "<script>alert('El email introducido ya existe')</script>";

    }


  }

?>

</body>
</html>