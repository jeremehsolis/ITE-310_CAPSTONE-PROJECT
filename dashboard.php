

<?php
 session_start();

	if(!ISSET($_SESSION['user_id'])){
		
	
	header('location:index.php');

	}

$db = mysqli_connect('localhost','root','','schedulingSystem');
	$check = mysqli_query($db, "SELECT * FROM `login` WHERE `user_id`='$_SESSION[user_id]'")or die(mysqli_error());
			
    
          
				$fetch = mysqli_fetch_array($check);
                
                $userde =$fetch['username'];
                 $_SESSION['userde'] = $userde;


$dataPoints = array( 
	array("y" => 7,"label" => "CHS" ),
	array("y" => 12,"label" => "CEA" ),
	array("y" => 28,"label" => "CMA" ),
	array("y" => 18,"label" => "CAS" ),
	array("y" => 41,"label" => "CITE" )
);

$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "schedulingsystem");


$test = array();

$count = 0;

$res = mysqli_query($link, "SELECT * FROM db_sub");
$rowcount=mysqli_num_rows($res);
while($row=mysqli_fetch_array($res)){
  $test[$count]["label"]=[""];
  $test[$count]["y"]=[];
  $count=$count+1;
  $test[$count]["label"]=["CMA"];
  $test[$count]["y"]=[];
  $count=$count-1;
  $test[$count]["label"]=[""];
  $test[$count]["y"]=[];
  $count=$count+2;
  $test[$count]["label"]=["CEA"];
  $test[$count]["y"]=[];
  $count=$count-2;
  $test[$count]["label"]=[""];
  $test[$count]["y"]=[];
  $count=$count+3;
  $test[$count]["label"]=["CAS"];
  $test[$count]["y"]=[];
  $count=$count-3;
  $test[$count]["label"]=[""];
  $test[$count]["y"]=[];
  $count=$count+4;
  $test[$count]["label"]=["CITE"];
  $test[$count]["y"]=$rowcount;
  $count=$count-4;
  $test[$count]["label"]=["CHS"];
  $test[$count]["y"]=[];
}

 
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <style>
      .row1 {
               background: white;
               border-radius: 25px;
               box-shadow: 10px 10px 20px gray;
               }
      </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body class="d-flex flex-column min-vh-100"  style="background-image: url('bg.jpg'); background-size: cover; background-repeat: no repeat;">
  <div class="container-fluid bg-light bg-gradient border-bottom border-3 border-dark">
  <header class="d-flex flex-wrap justify-content-center py-3 no-gutters my-auto mx-auto">
        <div href="dashboard.html" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none mx-auto">
          <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
          <img src="phinma.jpeg" class="img-fluid user-select-none" alt="logo" style="width: 60px; height: 60px;">
          <span class="fs-1 user-select-none">PHINMA-UPang R.A.S.S</span>
          
        </div>
    
              <ul class="nav nav-pills my-auto">   
                <li class="nav-item"><a href="dashboard.php" class="nav-link active fs-5 mx-1 fw-bold">Home</a></li>
                <li class="nav-item"><a href="contact.html" class="nav-link fs-5 mx-1 fw-bold">Contact Us</a></li>
                <form action="dblogout.php" method="POST">
                <li class="nav-item"><button class="btn btn-danger fs-5 mx-1 fw-bold" type="submit" name="submit">Log Out</button></li>
              </form>
              </ul>
        </header>
    </div>  
        <br>
        <div class="container rounded-5 border border-dark border-2 mt-auto" style="background-color: white;">
        <h1 class="text-center fw-bold" style="color: goldenrod;">DASHBOARD</h1>
          

     

        <div class="row rounded-5 text-dark container text-center py-2 my-2 mx-auto my-auto" style="max-width: 1000px;">
      
        <a href="subjectManagement.php" class="text-center px-5 py-2 col text-decoration-none text-dark">
          <img src="sched.png" class="img-fluid" alt="" style="width: 140px; height: 140px;"><p class="fw-bold">SCHEDULE MANAGEMENT</p></a>
        <a href="plotmg.php" class="text-center px-5 py-2 col text-decoration-none text-dark">
          <img src="plot.png" class="img-fluid" alt="" style="width: 140px; height: 140px;"><p class="fw-bold">MAPPING</p></a>       
        <a href="accountmg.php" class="text-center px-5 py-2 col text-decoration-none text-dark">
          <img src="acc.jpg" class="img-fluid" alt="" style="width: 140px; height: 140px;"><p class="fw-bold">ACCOUNT MANAGEMENT</p></a>
       
    
    </div>
       <hr>
<div class=" my-auto mx-auto" id="chartContainer" style="min-height: 350px; width: 85%; align-self: center;"></div>
              </div>

<br>

<script>
      window.onload = function() {
 
      var chart = new CanvasJS.Chart("chartContainer", {
	      animationEnabled: true,
	      title:{
		      text: "STATISTICS OVERVIEW",
    
	      },
	      axisY: {
		      title: "ROOMS OCCUPIED (BY DEPARTMENT)",
		      includeZero: true,
	      },
	      data: [{
		      type: "bar",
		      yValueFormatString: "#,##0",
		      indexLabel: "{y}",
		      indexLabelPlacement: "inside",
		      indexLabelFontWeight: "bolder",
		      indexLabelFontColor: "white",
		      dataPoints: <?php echo json_encode($test, JSON_NUMERIC_CHECK); ?>
	      }]
      });
      chart.render();
 
      }
      </script>

<footer class="footer mt-auto py-1 bg-light bg-gradient border-top border-2 border-dark">
    <div class="container py-2">
          <p class="text-center success my-auto">&copy; 2022 All Rights Reserved</p>
      </div>
  </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
  </body>

</html>