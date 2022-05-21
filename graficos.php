<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Graficos</title>
    <link rel="icon" type="image/x-icon"  href="favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/product/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 
  

   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">

      

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawGrafica);

     



      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawGrafica() {

        // Create the data table.

        var jsonData = $.ajax({
          url: "pide.php",
          dataType: "json",
          async: false
          }).responseText;
          
      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.DataTable(jsonData);
      data.addColumn('string', 'Topping');
       data.addColumn('number', 'Slices');

         // Set options 
         var options = {title:'Rendimiento de tarjetas gráficas',
                       width:600,
                       height:600};

        // Instantiate and draw the chart 
        var chart = new google.visualization.PieChart(document.getElementById('graficas'));
        chart.draw(data, options);
      }

      setInterval(drawGrafica, 1000); //con setintertval refrescamos cada poco tiempo la página para mantener actualizadas las gráficas
    
    </script>

<style>
 

   #graficas{

    margin:0 auto;


   }



    </style>

</head>

<body class="container">


<div>

<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
  <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
  <img src="logo.PNG" class="bi me-2" alt="logo página" width="40" height="32">
    <span class="fs-4">Benchmark</span>
  </a>

  <ul class="nav nav-pills">
  <li class="nav-item"><a href="./index.php" class="nav-link" >inicio</a></li>
  <li class="nav-item"><a href="./maps.php" class="nav-link">conocenos</a></li>
  <li class="nav-item"><a href="./graficos.php" class="nav-link">Benchmark</a></li>

  </ul>
</header>
</div>


<main>



<table class="columns container">
      <tr>
      <td><div id="graficas"></div></td>
      </tr>
    </table>



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



