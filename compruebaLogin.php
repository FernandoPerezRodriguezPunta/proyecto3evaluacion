<?php

session_start();




if (!isset($_POST['email'])) {  //que se haya entrado mediante


    header("Location:index.php");


 
}else{


    if (compruebaEmail()) {

 

        header("Location:index.php");

    }else{


        header("Location:login.php");

    }


   


}


function compruebaEmail(){

    require_once("conexionBD.php");

$clave =  $_POST['clave'];
$post =  substr($_POST["email"], 0, strpos($_POST["email"], '@'));//para quitar el arroba
$conn  = estableceConexion();


try {

$busqueda=$conn ->query("SELECT  id_cliente , nombre , email FROM cliente WHERE  clave = $clave");
$arrDatos=$busqueda->fetchAll(PDO::FETCH_ASSOC);


foreach  ($arrDatos as  $fila) {

    $email = $fila["email"];

    $user = substr($email, 0, strpos($email, '@'));  //para quitar el arroba
 


 $usuario = $fila["nombre"];
 $id = $fila["id_cliente"]; 



if ($user == $post) {

  
  
 $_SESSION["usuario"] = $usuario;
 $_SESSION["id"]=$id;
  
        return true;
    }
    

}

} catch (\Throwable $th) {


    echo "Mensaje de Error: " . $th->getMessage();




}



}



?>






 




