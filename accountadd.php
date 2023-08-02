<?php
      include('dbaddingacc.php');
      ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Account</title>
    <link rel="stylesheet" href="style.css">
    <style>
    
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body class="d-flex flex-column min-vh-100" style="background-image: url('bg.jpg'); background-size: cover; background-repeat: no repeat;">
    <div class="container-fluid bg-light bg-gradient border-bottom border-3 border-dark">
        <header class="d-flex flex-wrap justify-content-center py-3 no-gutters my-auto mx-auto">
          <div href="dashboard.html" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none mx-auto">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
            <img src="phinma.jpeg" class="img-fluid user-select-none" alt="logo" style="width: 60px; height: 60px;">
            <span class="fs-1 user-select-none">PHINMA-UPang R.A.S.S</span>
            
         
          </div>

          <ul class="nav nav-pills my-auto">   
                <li class="nav-item"><a href="dashboard.php" class="nav-link  fs-5 mx-1 fw-bold">Home</a></li>
                <li class="nav-item"><a href="contact.html" class="nav-link fs-5 mx-1 fw-bold">Contact Us</a></li>
                <form action="dblogout.php" method="POST">
                <li class="nav-item"><button class="btn btn-danger fs-5 mx-1 fw-bold" type="submit" name="submit">Log Out</button></li>
              </form>
              </ul>
        </header>
      </div>
      <br>
      <div class="container mt-auto">
  <div  class="container bg-light bg-gradient py-3 rounded-5 row mx-auto my-auto text-dark border border-dark border-2">
  <h1 class="fw-bold py-3 text-center">ADD ACCOUNT</h1>
  <form action="dbaddingacc.php" method="post">
    <div class="container mb-3 text-center">
      <div style="color:red;"><?php
                        if (isset($_GET['error'])) { ?>
                            <p class="error"><?php echo $_GET["error"]; ?></p>
                        <?php }elseif (isset($_GET['success'])) {?>
      </div><div style="color:green;">
                          <p class="success"><?php echo $_GET["success"]; ?></p>
                       <?php }?></div>
      <label for="exampleInputEmail1" class="form-label  fs-3">Employee ID:</label>
      <input type="textbox" name="empId" class="form-control form-control border border-2 border-dark mx-auto" id="exampleInputEmail1" aria-describedby="emailHelp" required="required" style="max-width: 300px;">
    </div>
  <div class="mb-3 container text-center">
    <label for="exampleInputEmail1" class="form-label  fs-3">Last Name:</label>
    <input type="text" name="lname" class="form-control form-control border border-2 border-dark mx-auto" autocomplete="off" id="exampleInputEmail1" required="required" style="max-width: 300px;">
  </div>
  <div class="mb-3 container text-center">
    <label for="exampleInputEmail1" class="form-label  fs-3">First Name:</label>
    <input type="textbox" name="fname" class="form-control form-control border border-2 border-dark mx-auto" autocomplete="off" id="exampleInputEmail1" required="required" style="max-width: 300px;">
  </div>
  <div class="mb-3 container text-center">
    <label for="exampleInputEmail1" class="form-label  fs-3">Middle Name:</label>
    <input type="textbox" name="mname" class="form-control form-control border border-2 border-dark mx-auto" autocomplete="off" id="exampleInputEmail1" required="required" style="max-width: 300px;">
    <input type="textbox" name="user" class="form-control form-control border border-2 border-dark" autocomplete="off" id="exampleInputEmail1" value="staff" hidden>
  </div>
  <div class="container text-center py-3">
  <a href="accountmg.php"><button type="button" class="btn btn-lg btn-danger my-1 px-3">CANCEL</button></a>
  <button type="submit" name="create" class="btn btn-lg btn-success" name="submit">CONFIRM</button>
  </div>
</form>
                        </div>
                        </div>
                        <br>
                        <footer class="footer mt-auto py-1 bg-light bg-gradient border-top border-2 border-dark">
    <div class="container py-2">
          <p class="text-center success my-auto">&copy; 2022 All Rights Reserved</p>
      </div>
  </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>

</html>