<?php
 session_start();
?>

<?php

echo "<link rel='stylesheet' type='text/css' href='css/style.min.css'>";

if (isset($_SESSION["useruid"])){
  echo'<!doctype html>
  <html>

  <head>
  <meta charset="utf-8">
  <!-- Responsive website -->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS, GoogleFonts and JavaScript -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <link rel="stylesheet"  href="css/main.min.css">
  <link href="https://fonts.googleapis.com/css?family=Bebas Neue" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <title>Active+ | CALORIES</title>
  </head>
  <body style="	background-color: #33995f">';

include 'header.php';

  echo '<div class="container-fluid">

  <div class="row">



  <div id = "div-canvas" class="chart-container-title col-lg-6" >
  	<h1 id="h1"> SUBMIT THE FORM TO SEE A CHART! </h1>
    <canvas id="myChart"></canvas>
  </div>

  <div class = "col-lg-6 form-div">
  <form class="intake-form" onsubmit="return false">
  <h1 style="font-size: 25px;"> How much did you eat today? </h1>
  <input id="calories" type="number" placeholder="Calories:" />
  <br/>
  <input id="carbohydrates" type="number" placeholder="Carbohydrates:" />
  <br/>
  <input id="fat" type="number" placeholder="Fat:" />
  <br/>
  <input id="protein" type="number" placeholder="Protein:" />
  <br/>
  <label style="padding: 10px;">Choose type of Chart:</label>
  <select  id="chart" name="chart">
    <option value="pie">Pie</option>
    <option value="bar">Bar</option>
    <option value="doughnut">Doughnut</option>
    <option value="polarArea">Polar Area</option>
  </select>
  </br>
  <button class="btn btn-success" onclick="submitValues()" onsubmit="return false">Submit</button>


  </form>
  <a class="restart" href="calories.php"><button class="btn btn-restart btn-light bt">Restart Chart</button></a>
  </div>




  </div>
  </div>






  <footer class="home-footer">
  <p class="pfooter"> Website Active+ made and maintained by Kacper Sliwinski</p>

  </footer>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.1.0/chart.min.js" integrity="sha512-RGbSeD/jDcZBWNsI1VCvdjcDULuSfWTtIva2ek5FtteXeSjLfXac4kqkDRHVGf1TwsXCAqPTF7/EYITD0/CTqw==" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src=" js/calories.min.js" charset="utf-8"></script>


  </body>
  </html>

';



}
else{
	include 'start.php';

}


?>
