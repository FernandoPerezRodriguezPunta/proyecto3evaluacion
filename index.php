
<?php

$mysqli = new mysqli("localhost", "dwes", "dwes", "pcgaming2");
if($mysqli->connect_error) {
  exit('Could not connect');
}



session_start();



?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon"  href="favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/product/">
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) tiene que ver con el modal-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  
    
    <title>PCgaming</title>

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


      

      .container {
  max-width: 960px;
}



.product-device {
  position: absolute;
  right: 10%;
  bottom: -30%;
  width: 300px;
  height: 540px;
  background-color: #333;
  border-radius: 21px;
  transform: rotate(30deg);
  background-image:url("imagenes/G402 Hyperion Fury FPS Gaming.png");
}

.product-device::before {
  position: absolute;
  top: 10%;
  right: 10px;
  bottom: 10%;
  left: 10px;
  content: "";
  background-color: rgba(255, 255, 255, .1);
  border-radius: 5px;
;
 
}

.product-device-2 {
  top: -25%;
  right: auto;
  bottom: 0;
  left: 5%;
  background-color: #e5e5e5;

}



    

    </style>


    <script>

     window.addEventListener('DOMContentLoaded', () => {
       


        document.querySelector("#login").addEventListener("click",()=>{


          window.open('login.php', "_self");

        
        }) ;

        
        document.querySelector("#registro").addEventListener("click",()=>{


        window.open('registro.php', "_self");


          }) ;


           //script para activar el modal
          document.getElementById('id01').style.display='active';
          $("#id01").trigger("click")


          document.querySelector("#aceptar").addEventListener("click",()=>{


            window.open('aceptar.php', "_self");  //se va a la página y crea la cookie





        });






     });
     



    </script>


  </head>
  <body>


  <?php


if (!isset($_SESSION["usuario"])) {


  echo '
  <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
      <img src="logo.PNG" id="logo" class=" img-thumbnail rounded float-start img-fluid" alt="logo de la tienda">
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
      <li class="nav-item"><a href="./index.php" class="nav-link" >inicio</a></li>
      <li class="nav-item"><a href="./maps.php" class="nav-link">conocenos</a></li>
      <li class="nav-item"><a href="./graficos.php" class="nav-link">Benchmark</a></li>
     
      </ul>

      <div class="col-md-3 text-end">
        <button type="button"  id="login"  class="btn btn-outline-primary me-2">Login</button>
        <button type="button"  id="registro" class="btn btn-primary">Sign-up</button>
      </div>
    </header>
      ';


}else{

  $usuario = $_SESSION["usuario"];


  echo '

     
  <div class="container">
  <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
    <img src="logo.PNG" id="logo" class=" img-thumbnail rounded float-start img-fluid" alt="logo de la tienda">
    </a>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
   
    <li class="nav-item"><a href="./index.php" class="nav-link" >inicio</a></li>
    <li class="nav-item"><a href="./maps.php" class="nav-link">conocenos</a></li>
    <li class="nav-item"><a href="./graficos.php" class="nav-link">Benchmark</a></li>
   
    </ul>

    <div class="col-md-3 text-end">';


    echo "
    
    </form>
    
    
    <div id='sesion'> 
    
    <a id='cuenta'>$usuario</a>
    
    <a id= 'cerrarSesion' href='cerrarSesion.php'> Cerrar sesion </a><br>
    </div>";

    echo '
    </div>
  </header>
    ';

}


  ?>

     

<nav>




<?php

if(!isset($_SESSION["usuario"])){


echo '

<main>
  <div  id="img1" class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">G402 Hyperion Fury FPS</h1>
      <p class="lead fw-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple’s marketing pages.</p>
   
    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
  </div>


</main> ';


}



?>
 
<?php


if(isset($_SESSION["usuario"])){ //solo si se inicia sesion como usuario se puede comprar 

  echo '
<form> 
<label for="pro">Seleccione un producto</label>
<select  name="pro" onchange="showCustomer(this.value)">
        <option value="0">Seleccione:</option>
                ';
        ?>
        <?php
          $query = $mysqli -> query ("SELECT * FROM des");    
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores["descripcion"].'">'.$valores["descripcion"].'</option>';
          }
        ?>


<?php

   //código ajax manda mediante get a productos2 un string para una xonsula en una base de datos

  echo '  </select> 

</form>
<br>
 <div id="txtHint">Customer info will be listed here...</div>

<script>
function showCustomer(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("txtHint").innerHTML = this.responseText;
  }
  xhttp.open("GET","productos2.php?q="+str , false);
  xhttp.send();
}
</script>';

}

?>



<?php

if(isset($_SESSION["usuario"])){



require_once("conexionBD.php");

echo "<div class='container float-left'>
<h3><img src='cesta.jpg' alt='Cesta' width='24' height='21'> Cesta</h3>";

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

}
?>

<?php

// formulario del carrito de la compra

if (isset($_SESSION["usuario"])){

 echo " <form id='vaciar' action='index.php' method='post'>
      <input type='submit' name='vaciar' value='Vaciar Cesta'"; 

    } 
      ?>

          <?php

          if (isset($_SESSION["usuario"])){
          
          if($cesta_vacia) { print "disabled='true'"; }
          
          }

          ?>

<?php

if (isset($_SESSION["usuario"])){

   echo "   />
  </form>
  <form id='comprar' action='cesta.php' method='post'>
      <input type='submit' name='comprar' value='Comprar' ";

}

      ?>
          <?php 

          if (isset($_SESSION["usuario"])){
          
          if($cesta_vacia) { print "disabled='true'"; } 
          
        }
          ?>

<?php 

if (isset($_SESSION["usuario"])){

 echo "     />
  </form>
</div>";

}

?>





  <?php  //aquí empieza el modal



if (!isset($_COOKIE["aceptar"])) {

  echo '


    <button id="id01" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"></button>
	<div   id="myModal" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" >
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Política de cookies</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body ">

           El sitio web pcgaming utiliza cookies propias y de terceros para
           recopilar información que ayuda a optimizar su visita a sus páginas web.
           No se utilizarán las cookies para recoger información de carácter
           personal. Usted puede permitir su uso o rechazarlo, también puede
           cambiar su configuración siempre que lo desee. Encontrará más
           información en nuestra Política de Cookies
		
          
		  </div>
		  <div class="modal-footer">
			<button type="button"   id="aceptar"  class="btn btn-secondary"  data-dismiss="modal">aceptar</button>
			<button type="button"   id="rechazar" class="btn btn-primary"  data-dismiss="modal"  >rechazar</button>
		  </div>
		</div>
	  </div>
	</div> ';
   

}



//termina el modal
?>




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

<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
