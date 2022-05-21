
<?php

session_start();

require_once("conexionBD.php");

if(isset($_SESSION["usuario"])){

 echo  ' <div id="productos">';



  try {
      $opc = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
      $dsn = "mysql:host=localhost;dbname=ejtienda";
      $dwes = estableceConexion();
  }
  catch (PDOException $e) {
      $error = $e->getCode();
      $mensaje = $e->getMessage();
  }

  if (!isset($error) && isset($_GET['q']) ) {



      $producto = $_GET['q'];



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
              echo "<p><form class='container ' id='${row['id_producto']}'  style='background-color: white;'   action='index.php' method='post'>";
              // Metemos ocultos los datos de los productos
         
              echo "<input type='hidden' name='producto' value='".$row['id_producto']."'/>";
              echo "<input type='hidden' name='nombre'   value='".$row['marca']."'/>";
              echo "<input type='hidden' name='modelo'   value= '".$row['modelo']."' /> ";
              echo "<input type='hidden' name='precio'   value='".$row['precio']."'/>";
            
           
              
              $imagen=$row['modelo'];
              echo "<img  id='pi' class='img-fluid' src='imagenes/$imagen.PNG'   width='400px' height='400px'>";
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


}else{


}


?>


