<?php
    // Recuperamos la información de la sesión
    session_start();

    require('./fpdf184/fpdf.php');
    require_once("conexionBD.php");
    $_SESSION['imprimir']=$_SESSION['cesta'];  //aquí guardo lo que se vaya a imprimir cuando se pague se destruira cesta asi no contendra
                                               //productos antiguos
    
    // Y comprobamos que el usuario se haya autentificado
    if (!isset($_SESSION['usuario'])) {
        die("Error - debe <a href='login.php'>identificarse</a>.<br />");
    }


    if(isset($_POST["pagar"])){


      $total = 0;
      foreach($_SESSION['cesta'] as $codigo => $producto) {
      
                    

                    $conn=estableceConexion();
                    $id_cliente =   $_SESSION["id"];
                    $id_producto = $producto['id_producto'];
                    $cantidad = $producto['cantidad'];
                    $total += $producto['precio']*$producto['cantidad'];//por cantidad
                    $fecha = date('m-d-Y h:i:s a', time());

                

                  $sql = "INSERT INTO venta (cantidad,total,fecha,cliente_id_cliente,producto_id_producto) VALUES ('$cantidad','$total','$fecha', '$id_cliente','$id_producto')";
     
                  $stmt = $conn->prepare($sql);
           
                 $stmt->execute();
           
                   $conn=null;
          

      }

          header("Location:pagar.php");



    }



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!-- Desarrollo Web en Entorno Servidor -->
<!-- Tema 4 : Desarrollo de aplicaciones web con PHP -->
<!-- Ejemplo Tienda Web: cesta.php -->
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Cesta</title>
  <link rel="icon" type="image/x-icon"  href="favicon.ico">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/product/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="/p2/javaScript.js" ></script>




</head>

<body class="container">

<div id="contenedor">
  <div id="encabezado">
    <h1>Cesta de la compra</h1>

    <div >

<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
  <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
  <img src="logo.PNG" class="bi me-2" alt="logo página" width="40" height="32">
    <span class="fs-4">Listado de productos</span>
  </a>

  <ul class="nav nav-pills">
  <li class="nav-item"><a href="./index.php" class="nav-link" >inicio</a></li>
  <li class="nav-item"><a href="./maps.html" class="nav-link">conocenos</a></li>
  <li class="nav-item"><a href="./graficos.php" class="nav-link">Benchmark</a></li>
  </ul>
</header>
</div>
    

     



    <?php

$usuario = $_SESSION["usuario"];

echo "</form>


<div id='sesion'> 

<a id='cuenta'>USUARIO:$usuario</a>

<a id= 'cerrarSesion' href='/p2/controlador/cerrarSesion.php'> Cerrar sesion </a>

</div>";



?>


  </div>
  <div id="productos">
<?php


 if(!isset($_SESSION['cesta'])){


  echo "la cesta está vacia<br>";






 }else{


    $total = 0;
    foreach($_SESSION['cesta'] as $codigo => $producto) {
       // echo "<p><span class='codigo'>$codigo</span></p>";
        echo "<span class='nombre'>Nombre:${producto['nombre']} ${producto['modelo']}</span></p>";
        echo "<span class='precio'>Precio:${producto['precio']}</span></p>";
        echo "<span class='precio'>Cantidad:${producto['cantidad']}</span></p>";
        $total += $producto['precio']*$producto['cantidad'];//por cantidad


    }
?>
      <hr />
      <p><span class='pagar'>Precio total: <?php print $total; ?> €</span></p>
      <form  method='post'>
          <p>
              <span class='pagar'>
                    <input type='submit' name='pagar' value='Pagar'/>
              </span>
          </p>
      </form>                  
  </div>

</div>

<?php

  }
?>

<footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1"> 2022 &copy; PC Gaming </p>
    <p> Contact@PCGaming.com</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>


</body>
</html>
