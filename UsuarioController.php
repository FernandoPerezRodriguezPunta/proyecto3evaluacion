<?php

require_once("Usuario.php");  //clase usuario importada

class UsuarioController {




   public function compruebaEmail($email){  //para que no coincidan dos emails

      require_once("conexionBD.php");

      $email =  substr($email, 0, strpos($email, '@'));
  
  $conn  = estableceConexion();

  $existe = false;
  
  $busqueda=$conn ->query("SELECT  email FROM cliente ");
  $arrDatos=$busqueda->fetchAll(PDO::FETCH_ASSOC);
  
  foreach  ($arrDatos as  $fila) {
  
      $email2 = $fila["email"];
  
      $email2 = substr($email2, 0, strpos($email2, '@'));  //para quitar el arroba
     
  

  
  if ( $email2  == $email) {


   $existe = true ;
        
         
      }
      
  
  }



  return $existe;


  
  }






   public function creaUsuario($dni,$nombre,$direccion,$email,$clave,$telefono,$cod_postal,$tarjeta){

      if($this->compruebaEmail($email)){



         return false;


      }else{



     $usuario = new  Usuario($dni,$nombre,$direccion,$email,$clave,$telefono,$cod_postal,$tarjeta);

  


    $usuario->insertar();  //insercion nuevo usuario

      return true;

      }


   }





}
