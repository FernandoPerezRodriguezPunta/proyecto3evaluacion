

<?php

function estableceConexion(){

    $username = "dwes";
    $password = "dwes";

    try {

        $conn = new PDO('mysql:host=localhost;dbname=pcgaming2',  $username ,  $password );

        return $conn;

    
    } catch (PDOException $e) {
        echo 'Falló la conexión: ' . $e->getMessage();
    }
   

   
}


?>