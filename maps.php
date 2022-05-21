<!DOCTYPE html>
<html>
<head> 
    <meta charset="UTF-8">

    
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/product/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon"  href="favicon.ico">
  
 



    <title>conocenos</title>
	<style> 
  	  #map {
        margin: 0 auto;
        height: 100%;
        width :40%;
        border: 2px solid black;
        
      }
     
      html, body {
        height: 50%;
        margin: 0;
        padding: 0;
      }
	</style> 
</head>  
	<body class="container">

  <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
  <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
  <img src="logo.PNG" class="bi me-2" alt="logo página" width="40" height="32">
    
  </a>

  <ul class="nav nav-pills">
  <li class="nav-item"><a href="./index.php" class="nav-link" >inicio</a></li>
  <li class="nav-item"><a href="./maps.html" class="nav-link">conocenos</a></li>
  <li class="nav-item"><a href="./graficos.php" class="nav-link">Benchmark</a></li>

  </ul>
</header>
</div>


		<div id ="map"> </div> 


    <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1"> 2022 &copy; PC Gaming </p>
    <p> Contact@PCGaming.com</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>



	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCKiIqCdZGrVxx06LSbe7uG3zXOq1Cz5k&callback=initMap" async defer></script>
	<script defer>
		
      var map;
  	 function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
		  center: {lat: 37.3546949, lng: -5.9868829},
          zoom: 13,
        });
        var marker = new google.maps.Marker({
          position: {lat: 37.3546949, lng: -5.9868829},
          map: map,
	  title: 'IES PUNTA DEL VERDE'
        });
      }

      
	</script>

	</body> 
</html>