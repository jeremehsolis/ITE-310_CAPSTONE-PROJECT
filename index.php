

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index</title>
    <style>
        * {
             padding: 0;
             margin: 0;
             box-sizing: border-box;
        }

        .row1 {
             background: white;
             border-radius: 25px;
             box-shadow: 30px 30px 30px gray;
             }


        img {
            border-top-left-radius: 25px;
            border-bottom-left-radius: 25px;
        }     

        .btn1 {
            border: none;
            outline: none;
            height: 50px;
            width: 100%;
            border-radius: 4px;
            font-weight: bold;
        }

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

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .form-signin {
  max-width: 330px;
  padding: 15px;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}


    </style>
    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body class="d-flex flex-column min-vh-100">
    <div class="container-fluid bg-light bg-gradient border-bottom border-3 border-dark">
        <header class="d-flex flex-wrap justify-content-center py-3 no-gutters my-auto mx-auto">
          <div class="d-flex align-items-center text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
            <img src="phinma.jpeg" class="img-fluid user-select-none" alt="logo" style="width: 60px; height: 60px;">
            <span class="fs-1 user-select-none">PHINMA-UPang Room Assignment and Scheduling System</span>
          </div>
        </header>
    </div>
    <br>
<body style="background-image: url('bg.jpg'); background-size: cover; background-repeat: no repeat;">
<form action="dbindex.php" method="POST" class="mt-auto">
<main class="form-signin w-100 m-auto bg-light rounded-5">
  <form>
    <div class="container text-center user-select-none">
    <img class="mb-4" src="upanglogo1.png" alt="" width="100" height="100">
</div>
    <div style="color:red; text-align: center;"><?php
      if (isset($_GET['error'])) { ?>
          <p class="error"><?php echo $_GET["error"]; ?></p>
      <?php }?></div>
    <h1 class="h3 mb-3 fw-normal text-center">Please sign in</h1>
    <h1 class="h3 mb-3 fw-normal text-center"></h1>

    <div class="form-floating">
      <input type="username" class="form-control" name="username" placeholder="Employee ID">
      <label for="floatingInput">Employee ID</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name="password" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Sign in</button>
  </form>
</main>
<br>
<footer class="footer mt-auto py-1 bg-light bg-gradient border-top border-2 border-dark">
    <div class="container py-2">
          <p class="text-center success my-auto">&copy; 2022 All Rights Reserved</p>
      </div>
  </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>

</html>