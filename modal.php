<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  
    <script>

    window.addEventListener('DOMContentLoaded', () => {

        document.getElementById('id01').style.display='active';
        $("#id01").trigger("click")

        document.querySelector("#aceptar").addEventListener("click",()=>{


            window.open('aceptar.php', "_self");





        });

        document.querySelector("#rechazar").addEventListener("click",()=>{


                   




        });
        
    });
    

    </script>


</head>
<body>



 <?php 

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
			<button type="button" class="btn btn-secondary"  id="aceptar"  data-dismiss="modal">aceptar</button>
			<button type="button" class="btn btn-primary"    id="rechazar"    data-dismiss="modal"  >rechazar</button>
		  </div>
		</div>
	  </div>
	</div> ';

 }


    ?>

</body>
</html>