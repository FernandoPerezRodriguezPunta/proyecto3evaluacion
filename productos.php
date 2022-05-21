<?php

    //OBSOLETO
    // Recuperamos la información de la sesión
    session_start();
    
    if(isset($_POST["pro"])){

      $_SESSION["pro"]=$_POST["pro"];
      
      header("Location:productos.php");
      
      }
      
  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!-- Desarrollo Web en Entorno Servidor -->
<!-- Tema 4 : Desarrollo de aplicaciones web con PHP -->
<!-- Ejemplo Tienda Web: productos.php -->
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Productos</title>
    <link rel="icon" type="image/x-icon"  href="favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/product/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 

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



      

figure {
  grid-column: 1;
  margin: 0 auto;
  width: 10vw;
  height: 10vh;
}





input {
  margin-bottom: 0.5rem;
  text-align: justify;
  margin-left: 70px;
margin-right: 50px;

}



form {



  margin: 0 auto;
  width: 25vw;

  border: white solid 2px;
  padding-left: 1rem;
  padding-top: 2rem;
}

#cantidad{

width: 50px;

}



    </style>




</head>

<?php
    // Recuperamos la información de la sesión
 
    // Y comprobamos que el usuario se haya autentificado
    if (!isset($_SESSION['usuario'])) {
        die("Error - debe <a href='login.php'>identificarse</a>.<br />");
    }
?>

<body class="container">


   

    <div>

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

<a id= 'cerrarSesion' href='cerrarSesion.php'> Cerrar sesion </a><br>
</div>";



?>


</div>
  <div id="cesta">
    <h3><img src="cesta.jpg" alt="Cesta" width="24" height="21"> Cesta</h3>


<?php
 
 require_once("conexionBD.php");

 echo "<div class='container float-left'>";

    // Comprobamos si se ha enviado el formulario de vaciar la cesta
    if (isset($_POST['vaciar'])) {
        unset($_SESSION['cesta']);
    }

    // Comprobamos si se ha enviado el formulario de añadir
    if (isset($_POST['enviar'])) {
        // Creamos un array con los datos del nuevo producto

        $producto["id_producto"]= $_POST['producto'];
        $producto['nombre'] = $_POST['nombre'];
        $producto['modelo']=$_POST['modelo'];
        $producto['precio'] = $_POST['precio'];
        $producto['cantidad']= $_POST['cantidad'];

        //  y lo añadimos
        $_SESSION['cesta'][$_POST['producto']] = $producto;
   }
   
   // Si la cesta está vacía, mostramos un mensaje
   
   if ((!isset($_SESSION['cesta'])) || (count($_SESSION['cesta']) == 0)) {
  

       $cesta_vacia = true;
   }
   
   // Si no está vacía, mostrar su contenido
   else {      
       foreach ($_SESSION['cesta'] as $codigo => $producto)
             
       echo "<span class='nombre'>Nombre:${producto['nombre']} ${producto['modelo']}</span></p>";
       echo "<span class='precio'>Precio:${producto['precio']}</span></p>";
       echo "<span class='precio'>Cantidad:${producto['cantidad']}</span></p>";
      


       $cesta_vacia = false;
   }

   echo "</div>";
?>
    <form id='vaciar' action='productos.php' method='post'>
        <input type='submit' name='vaciar' value='Vaciar Cesta' 
            <?php if($cesta_vacia) { print "disabled='true'"; } ?>
        />
    </form>
    <form id='comprar' action='cesta.php' method='post'>
        <input type='submit' name='comprar' value='Comprar' 
            <?php if($cesta_vacia) { print "disabled='true'"; } ?>
        />
    </form>
  </div>
  <div id="productos">
<?php
    try {
        $opc = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
        $dsn = "mysql:host=localhost;dbname=ejtienda";
        $dwes = estableceConexion();
    }
    catch (PDOException $e) {
        $error = $e->getCode();
        $mensaje = $e->getMessage();
    }

    if (!isset($error)) {



        $producto =  $_SESSION["pro"];

  

$sql = "SELECT   id_producto, marca, modelo, precio , descripcion  FROM producto WHERE descripcion = '$producto' ";


// 	$sql = <<<SQL
// SELECT id_producto, marca, modelo, precio , descripcion
// FROM producto WHERE descripcion = '$producto'
// SQL;

	$resultado = $dwes->query($sql);
	if($resultado) {
            // Creamos un formulario por cada producto obtenido
            $row = $resultado->fetch();
            while ($row != null) {
                echo "<p><form id='${row['id_producto']}'  style='background-color: white;'   action='productos.php' method='post'>";
                // Metemos ocultos los datos de los productos
           
                echo "<input type='hidden' name='producto' value='".$row['id_producto']."'/>";
                echo "<input type='hidden' name='nombre'   value='".$row['marca']."'/>";
                echo "<input type='hidden' name='modelo'   value= '".$row['modelo']."' /> ";
                echo "<input type='hidden' name='precio'   value='".$row['precio']."'/>";
              
             
                
                $imagen=$row['modelo'];
                echo "<img  id='pi' src='imagenes/$imagen.PNG' class='img-fluid  width='200px' height='200px'>";
                echo " ${row['marca']}: ";
                echo " ${row['modelo']}: ";
                echo " ${row['descripcion']} ";
                echo $row['precio']."€.<br>";
                echo "<label for='cantidad'>Cantidad:</label><input type='number'  id='cantidad' min=1    name='cantidad' required />";
                echo "<input type='submit' id='aniade' name='enviar'  width='10px'  value='Añadir'/>";
                echo "</form>";
                echo "</p>";
                $row = $resultado->fetch();
            }
	}
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
