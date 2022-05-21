

<?php
require('./fpdf184/fpdf.php'); //archivos que contienen fpdf
    // Recuperamos la información de la sesión
    session_start();
    
   


    unset($_SESSION['cesta']);

    
    if (isset($_POST)){


         if (isset($_POST['factura'])){


            $documento;

            foreach($_SESSION['imprimir'] as $codigo => $producto) {
           
                // echo "<p><span class='codigo'>$codigo</span></p>";
               $nombre= "Producto:${producto['nombre']} ${producto['modelo']}";
               $precio = "Precio:${producto['precio']}";
               $cantidad = "${producto['cantidad']}";
               $total+= $producto['precio']*$producto['cantidad'];//por cantidad
             


          
         
             }
  
ob_start(); // sirve para indicarle a php que se ha de iniciar el buffering de la salida, es decir, que debe empezar a guardar la salida en el bufer interno, en vez de enviarlo al cliente
$pdf=new FPDF();
$pdf->AddPage();

$pdf->SetFont('Arial','B',7);
$pdf->Image('logo.PNG' , 0 ,0, 0 , 38,'PNG');
$pdf->Image('factura.PNG' , 100 ,10, 60 , 20,'PNG');
$pdf->SetXY(15,60);
$pdf->Cell(40,20,"cliente",1);
$pdf->Cell(40,20,"cantidad",1);
$pdf->Cell(40,20,"Importe",1);
$pdf->Ln();
$pdf->SetX(15);
$pdf->Cell(40,20, $_SESSION['usuario'],1);
$pdf->Cell(40,20,$cantidad,1);
$pdf->Cell(40,20, $total,1);
$pdf->Ln();
$pdf->SetX(15);
$pdf->Cell(40,20,"Gracias por su compra.");

//$pdf->Multicell(50,10, $documento); //Multicell para poder agregar saltos de linea o se puede usar $pdf->Ln()
$pdf->Output();
ob_end_flush(); //Volcar (enviar) el búfer de salida y deshabilitar el almacenamiento en el mismo
 
       }

 }




?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagar</title>
    <link rel="icon" type="image/x-icon"  href="favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/product/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 

  
  

</head>
<body class="container">

<div>

<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
  <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
  <img src="logo.PNG" class="bi me-2" alt="logo página" width="40" height="32">
    <span class="fs-4">Gracias por su compra</span>
  </a>

  <ul class="nav nav-pills">
  <li class="nav-item"><a href="./index.php" class="nav-link" >inicio</a></li>
    <li class="nav-item"><a href="./maps.html" class="nav-link">conocenos</a></li>
    <li class="nav-item"><a href="./graficos.php" class="nav-link">Benchmark</a></li>

  </ul>
</header>
</div>


<main class="container">



<form method="post">
  
  <button type="submit" name="factura"  class="btn btn-primary">Imprimir factura</button>


</form>
 
 

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

    
</body>
</html>
