<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Account</title>
    <link rel="stylesheet" href="style.css">
<title>Upload File</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
<body class="d-flex flex-column min-vh-100" style="background-image: url('bg.jpg'); background-size: cover; background-repeat: no repeat;">
<div class="container-fluid bg-dark bg-gradient">
        <header class="d-flex flex-wrap justify-content-center py-3 border-bottom border-dark no-gutters my-auto mx-auto">
          <div href="dashboard.html" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
       
            <span class="fs-1 user-select-none" style="font-size:8vw;">PHINMA-UPang Room Assignment and Scheduling System</span>
         
          </div>

          <ul class="nav nav-pills my-auto">   
            <li class="nav-item"><a href="dashboard.php" class="nav-link fs-5 mx-1 fw-bold">Home</a></li>
            <li class="nav-item"><a href="about.html" class="nav-link fs-5 mx-1 fw-bold">About</a></li>
            <li class="nav-item"><a href="contact.html" class="nav-link fs-5 mx-1 fw-bold">Contact Us</a></li>
            <li class="nav-item"><a href="index.php" class="nav-link fs-5 mx-1 fw-bold">Log Out</a></li>
          </ul>
        </header>
      </div>

<div class="container bg-light bg-gradient my-auto mx-auto text-center rounded-5 py-5 px-5">
<h1 class="fw-bold text-dark">Upload Excel File</h1>


<form method="POST" action="excelUpload.php" enctype="multipart/form-data">
<div class="form-group">
	<input type="file" name="file" class="form-control">
</div>
<div class="form-group py-3">
	<button type="submit" name="Submit" class="btn btn-success">Upload</button>
</div> 
</div>
<footer class="footer mt-auto py-1 bg-dark bg-gradient">
    <div class="container">
          <p class="text-center">&copy; 2022 All Rights Reserved</p>
      </div>
  </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>	