
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    
<title>login</title>

    
<link rel="icon" type="image/x-icon"  href="favicon.ico">
<link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/heroes/">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">





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
    </style>


    <script src="./javaScript.js" ></script>
    
</head>
<body>





<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
      <img src="logo.PNG" class="bi me-2" alt="logo página" width="40" height="32">
   
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="./index.php" class="nav-link" >inicio</a></li>
        <li class="nav-item"><a href="./maps.php" class="nav-link">conocenos</a></li>
        <li class="nav-item"><a href="./graficos.php" class="nav-link">Benchmark</a></li>
       
      </ul>
    </header>
  </div>




    <main>
          
    <!--  <form  method="POST" class="login" action="compruebaLogin.php">
                <h2>Login</h2>
                <label>E-mail:</label><input type="email" id="emaill" placeholder="nombre" name="email" required /><br>
                <label>Password:</label><input type="password" id="password" placeholder="Ingresa su contraseña" name="clave" required><br><br>
                <input type="submit" value="Crear Sesion" /></p>
                <a id="carrito" href="registro.php">Registrate</a>
            </form> -->

           
  

       
    <div class="container col-xl-10 col-xxl-8 px-4 py-5" >
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">Iniciar sesión</h1>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form  method="POST" action="compruebaLogin.php" class="p-4 p-md-5 border rounded-3 bg-light">
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" required>
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="clave" required>
            <label for="floatingPassword">Password</label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Enviar</button>
          <hr class="my-4">
        </form>
      </div>
    </div>
  </div>


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