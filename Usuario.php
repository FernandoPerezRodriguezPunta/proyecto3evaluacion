<?php


class Usuario
{

    //atributos


    private $dni;

    private $nombre;

    private $pass;

    private $email;

    private $direccion;

    private $tarjeta;

    private $telefono;

    private $cod_postal;



    public function __construct($dni,$nombre,$direccion,$email,$pass,$telefono,$cod_postal,$tarjeta){

        $this->dni=$dni;
        $this->nombre = $nombre;
        $this->pass = $pass;
        $this->email = $email;
        $this->direccion = $direccion;
        $this->tarjeta = $tarjeta;
        $this->telefono = $telefono;
        $this->cod_postal = $cod_postal;
    }

 
    
	function getDni() {
		return $this->dni;
	}
	

	function setDni($dni): self {
		$this->dni = $dni;
		return $this;
	}
	

    function getCod_postal() {
		return $this->cod_postal;
	}
	

	function setCod_postal($cod_postal): self {
		$this->cod_postal = $cod_postal;
		return $this;
	}


    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of pass
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Set the value of pass
     *
     * @return  self
     */
    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of direccion
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set the value of direccion
     *
     * @return  self
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get the value of tarjeta
     */
    public function getTarjeta()
    {
        return $this->tarjeta;
    }

    /**
     * Set the value of tarjeta
     *
     * @return  self
     */
    public function setTarjeta($tarjeta)
    {
        $this->tarjeta = $tarjeta;

        return $this;
    }



    /**
     * Get the value of telefono
     */ 
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set the value of telefono
     *
     * @return  self
     */ 
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }


    function insertar(){

        $conn      = estableceConexion();

        $dni       =$this->getDni();
        $nombre    = $this->getNombre();
        $direccion = $this->getDireccion();
        $clave     = $this->getPass();
        $email     = $this->getEmail();
        $telefono  = $this->getTelefono();
        $tarjeta   = $this->getTarjeta();
        $postal    = $this->getCod_postal();

        
        $sql = "INSERT INTO cliente (dni,nombre,direccion,email,clave,telefono,cod_postal,tarjeta) VALUES ('$dni','$nombre','$direccion','$email ',' $clave','$telefono','$postal','$tarjeta')";
     
        $stmt = $conn->prepare($sql);

        $stmt->execute();

        $conn=null;
  
  
             
         }




    



}




