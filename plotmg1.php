<?php
    include('dbsubject.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mapping</title>
    <link rel="stylesheet" href="style.css">
    <style>
    
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
    <nav class="navbar navbar-expand-lg bg-light bg-gradient rounded-bottom">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
        <ul class="navbar-nav my-2">
          <li class="nav-item fs-5">
            <a class="nav-link active px-5 fw-bold" aria-current="page" href="plotmg.php">CITE</a>
          </li>
          <li class="nav-item fs-5">
            <a class="nav-link disabled px-5 fw-bold">CEA</a>
          </li>
          <li class="nav-item fs-5">
            <a class="nav-link disabled px-5 fw-bold">CAS</a>
          </li>
          <li class="nav-item fs-5">
            <a class="nav-link disabled px-5 fw-bold">CMA</a>
          </li>
          <li class="nav-item fs-5">
            <a class="nav-link disabled px-5 fw-bold">CHS</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <br>
  <div class="container bg-light text-center rounded-5">
    <h1 class="fw-bold" style="color:goldenrod;">CITE ROOM MAPPING</h1>
  </div>
  <br>
<div class="container bg-light rounded-5">
  <br>
  <h1 class="fw-bold text-center user-select-none" id="sp1" style="cursor: pointer;">ITS 200</h1>
  
  <div class="container" id="t1" style="display:none;">
           <form class="text-center" method="POST">
              <a href = "mapping/map1.php"><input class="btn btn-success my-1 mb-3" type="button" name="create_pdf" value="GENERATE PDF"></a>
            <div class="container-fluid rounded-5">
      
        <div class="container-fluid px-5 rounded-5">
        <?php

        $rowz = mysqli_num_rows($itstime1);

        if($rowz == 7){
        echo'<h1 class="fw-bold text-center" style="color:red;">MONDAY</h1>';
        }else{
          echo'<h1 class="fw-bold text-center" style="color:green;">MONDAY</h1>';
        }


        
        ?>
        <?php

      if ($its1->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
      }
      echo'  ||  ';
      if ($its2->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
      }
      echo'  ||  ';
      if ($its3->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
      }
      echo'  ||  ';
      if ($its4->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
      }
      echo'  ||  ';
      if ($its5->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
      }
      echo'  ||  ';
      if ($its6->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
      }
      echo'  ||  ';
      if ($its7->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
      }

      
          ?>
           <div class="table-responsive">
          <table class="table table-bordered bg-light border border-dark border-2">
                      <thead class="table-dark">
                      <tr class="text-center">
                        <th>Subject</th>
                        <th>Section</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Time</th>
                        <th>Day</th>
                        <th>Room</th>
                      </tr>
                    </thead>
                    <tbody>

                    
                                    <?php
                                    while ($line = mysqli_fetch_array($itstime1)){ ?>
                                        <tr>
                                            <td class="col text-center"><?php echo strtoupper($line['subcode']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['section']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['tittle']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['status']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['start']); ?> / 
                                                <?php echo strtoupper($line['end']); ?>
                                            </td>
                                            <td class="col text-center"><?php echo strtoupper($line['schedule']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['getbuilding']); ?> <?php echo strtoupper($line['getroom']); ?>
                                            </td>
                                        </tr>
                                      
                                <?php }?>
                                </tbody>

          </table>
                                    </div>
          <?php

        $rowz = mysqli_num_rows($itstime2);
     

        if($rowz == 7){
        echo'<h1 class="fw-bold text-center" style="color:red;">TUESDAY</h1>';
        }else{
          echo'<h1 class="fw-bold text-center" style="color:green;">TUESDAY</h1>';
        }

        ?>

<?php

if ($its8->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}
echo'  ||  ';
if ($its9->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}
echo'  ||  ';
if ($its10->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}
echo'  ||  ';
if ($its11->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}
echo'  ||  ';
if ($its12->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}
echo'  ||  ';
if ($its13->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}
echo'  ||  ';
if ($its14->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}


    ?>
     <div class="table-responsive">
          <table class="table table-bordered bg-light border border-dark border-2">
                      <thead class="table-dark">
                      <tr class="text-center">
                        <th>Subject</th>
                        <th>Section</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Time</th>
                        <th>Day</th>
                        <th>Room</th>
                      </tr>
                    </thead>
                    <tbody>

                    
                                    <?php
                                    while ($line = mysqli_fetch_array($itstime2)){ ?>
                                        <tr>
                                            <td class="col text-center"><?php echo strtoupper($line['subcode']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['section']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['tittle']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['status']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['start']); ?> / 
                                                <?php echo strtoupper($line['end']); ?>
                                            </td>
                                            <td class="col text-center"><?php echo strtoupper($line['schedule']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['getbuilding']); ?> <?php echo strtoupper($line['getroom']); ?>
                                            </td>
                                        </tr>
                                      
                                <?php }?>
                                </tbody>

          </table>
                                    </div>
          <?php

        $rowz = mysqli_num_rows($itstime3);
      

        if($rowz == 7){
        echo'<h1 class="fw-bold text-center" style="color:red;">WEDNESDAY</h1>';
        }else{
          echo'<h1 class="fw-bold text-center" style="color:green;">WEDNESDAY</h1>';
        }

        ?>
        <?php

if ($its15->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}
echo'  ||  ';
if ($its16->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}
echo'  ||  ';
if ($its17->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}
echo'  ||  ';
if ($its18->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}
echo'  ||  ';
if ($its19->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}
echo'  ||  ';
if ($its20->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}
echo'  ||  ';
if ($its21->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}


    ?>
     <div class="table-responsive">
          <table class="table table-bordered bg-light border border-dark border-2">
                      <thead class="table-dark">
                      <tr class="text-center">
                        <th>Subject</th>
                        <th>Section</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Time</th>
                        <th>Day</th>
                        <th>Room</th>
                      </tr>
                    </thead>
                    <tbody>

                    
                                    <?php
                                    while ($line = mysqli_fetch_array($itstime3)){ ?>
                                        <tr>
                                            <td class="col text-center"><?php echo strtoupper($line['subcode']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['section']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['tittle']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['status']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['start']); ?> / 
                                                <?php echo strtoupper($line['end']); ?>
                                            </td>
                                            <td class="col text-center"><?php echo strtoupper($line['schedule']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['getbuilding']); ?> <?php echo strtoupper($line['getroom']); ?>
                                            </td>
                                        </tr>
                                      
                                <?php }?>
                                </tbody>

          </table>
                                    </div>
          <?php

        $rowz = mysqli_num_rows($itstime4);

        if($rowz == 7){
        echo'<h1 class="fw-bold text-center" style="color:red;">THURSDAY</h1>';
        }else{
          echo'<h1 class="fw-bold text-center" style="color:green;">THURSDAY</h1>';
        }

        ?>
        <?php

if ($its22->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}
echo'  ||  ';
if ($its23->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}
echo'  ||  ';
if ($its24->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}
echo'  ||  ';
if ($its25->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}
echo'  ||  ';
if ($its26->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}
echo'  ||  ';
if ($its27->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}
echo'  ||  ';
if ($its28->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}


    ?>
     <div class="table-responsive">
          <table class="table table-bordered bg-light border border-dark border-2">
                      <thead class="table-dark">
                      <tr class="text-center">
                        <th>Subject</th>
                        <th>Section</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Time</th>
                        <th>Day</th>
                        <th>Room</th>
                      </tr>
                    </thead>
                    <tbody>

                    
                                    <?php
                                    while ($line = mysqli_fetch_array($itstime4)){ ?>
                                        <tr>
                                            <td class="col text-center"><?php echo strtoupper($line['subcode']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['section']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['tittle']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['status']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['start']); ?> / 
                                                <?php echo strtoupper($line['end']); ?>
                                            </td>
                                            <td class="col text-center"><?php echo strtoupper($line['schedule']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['getbuilding']); ?> <?php echo strtoupper($line['getroom']); ?>
                                            </td>
                                        </tr>
                                      
                                <?php }?>
                                </tbody>

          </table>
                                    </div>
</div>
        </div>
  </div>
                                          <hr>
                                         
                                          <h1 class="fw-bold text-center user-select-none" id="sp2" style="cursor: pointer;">ITS 201</h1>
  
  <div class="container text-center" id="t2" style="display:none;">

           <form class="text-center" method="POST">
              <a href = "mapping/map1.php"><input class="btn btn-success my-1 mb-3" type="button" name="create_pdf" value="GENERATE PDF"></a>
            <div class="container-fluid rounded-5">
      
        <div class="container-fluid px-5 rounded-5">
        <?php

        $rowz = mysqli_num_rows($ittime1);

        if($rowz == 7){
        echo'<h1 class="fw-bold text-center" style="color:red;">MONDAY</h1>';
        }else{
          echo'<h1 class="fw-bold text-center" style="color:green;">MONDAY</h1>';
        }


        
        ?>
        <?php

      if ($it1->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
      }
      echo'  ||  ';
      if ($it2->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
      }
      echo'  ||  ';
      if ($it3->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
      }
      echo'  ||  ';
      if ($it4->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
      }
      echo'  ||  ';
      if ($it5->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
      }
      echo'  ||  ';
      if ($it6->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
      }
      echo'  ||  ';
      if ($it7->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
      }

      
          ?>
           <div class="table-responsive">
          <table class="table table-bordered bg-light border border-dark border-2">
                      <thead class="table-dark">
                      <tr class="text-center">
                        <th>Subject</th>
                        <th>Section</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Time</th>
                        <th>Day</th>
                        <th>Room</th>
                      </tr>
                    </thead>
                    <tbody>

                    
                                    <?php
                                    while ($line = mysqli_fetch_array($ittime1)){ ?>
                                        <tr>
                                            <td class="col text-center"><?php echo strtoupper($line['subcode']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['section']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['tittle']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['status']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['start']); ?> / 
                                                <?php echo strtoupper($line['end']); ?>
                                            </td>
                                            <td class="col text-center"><?php echo strtoupper($line['schedule']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['getbuilding']); ?> <?php echo strtoupper($line['getroom']); ?>
                                            </td>
                                        </tr>
                                      
                                <?php }?>
                                </tbody>

          </table>
                                    </div>
          <?php

        $rowz = mysqli_num_rows($ittime2);
     

        if($rowz == 7){
        echo'<h1 class="fw-bold text-center" style="color:red;">TUESDAY</h1>';
        }else{
          echo'<h1 class="fw-bold text-center" style="color:green;">TUESDAY</h1>';
        }

        ?>

<?php

if ($it8->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}
echo'  ||  ';
if ($it9->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}
echo'  ||  ';
if ($it10->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}
echo'  ||  ';
if ($it11->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}
echo'  ||  ';
if ($it12->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}
echo'  ||  ';
if ($it13->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}
echo'  ||  ';
if ($it14->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}


    ?>
     <div class="table-responsive">
          <table class="table table-bordered bg-light border border-dark border-2">
                      <thead class="table-dark">
                      <tr class="text-center">
                        <th>Subject</th>
                        <th>Section</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Time</th>
                        <th>Day</th>
                        <th>Room</th>
                      </tr>
                    </thead>
                    <tbody>

                    
                                    <?php
                                    while ($line = mysqli_fetch_array($ittime2)){ ?>
                                        <tr>
                                            <td class="col text-center"><?php echo strtoupper($line['subcode']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['section']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['tittle']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['status']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['start']); ?> / 
                                                <?php echo strtoupper($line['end']); ?>
                                            </td>
                                            <td class="col text-center"><?php echo strtoupper($line['schedule']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['getbuilding']); ?> <?php echo strtoupper($line['getroom']); ?>
                                            </td>
                                        </tr>
                                      
                                <?php }?>
                                </tbody>

          </table>
                                    </div>
          <?php

        $rowz = mysqli_num_rows($ittime3);
      

        if($rowz == 7){
        echo'<h1 class="fw-bold text-center" style="color:red;">WEDNESDAY</h1>';
        }else{
          echo'<h1 class="fw-bold text-center" style="color:green;">WEDNESDAY</h1>';
        }

        ?>
        <?php

if ($it15->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}
echo'  ||  ';
if ($it16->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}
echo'  ||  ';
if ($it17->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}
echo'  ||  ';
if ($it18->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}
echo'  ||  ';
if ($it19->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}
echo'  ||  ';
if ($it20->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}
echo'  ||  ';
if ($its21->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}


    ?>
     <div class="table-responsive">
          <table class="table table-bordered bg-light border border-dark border-2">
                      <thead class="table-dark">
                      <tr class="text-center">
                        <th>Subject</th>
                        <th>Section</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Time</th>
                        <th>Day</th>
                        <th>Room</th>
                      </tr>
                    </thead>
                    <tbody>

                    
                                    <?php
                                    while ($line = mysqli_fetch_array($ittime3)){ ?>
                                        <tr>
                                            <td class="col text-center"><?php echo strtoupper($line['subcode']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['section']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['tittle']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['status']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['start']); ?> / 
                                                <?php echo strtoupper($line['end']); ?>
                                            </td>
                                            <td class="col text-center"><?php echo strtoupper($line['schedule']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['getbuilding']); ?> <?php echo strtoupper($line['getroom']); ?>
                                            </td>
                                        </tr>
                                      
                                <?php }?>
                                </tbody>

          </table>
                                    </div>
          <?php

        $rowz = mysqli_num_rows($ittime4);

        if($rowz == 7){
        echo'<h1 class="fw-bold text-center" style="color:red;">THURSDAY</h1>';
        }else{
          echo'<h1 class="fw-bold text-center" style="color:green;">THURSDAY</h1>';
        }

        ?>
        <?php

if ($it22->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}
echo'  ||  ';
if ($it23->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}
echo'  ||  ';
if ($it24->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}
echo'  ||  ';
if ($it25->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}
echo'  ||  ';
if ($it26->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}
echo'  ||  ';
if ($it27->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}
echo'  ||  ';
if ($it28->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}


    ?>
     <div class="table-responsive">
          <table class="table table-bordered bg-light border border-dark border-2">
                      <thead class="table-dark">
                      <tr class="text-center">
                        <th>Subject</th>
                        <th>Section</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Time</th>
                        <th>Day</th>
                        <th>Room</th>
                      </tr>
                    </thead>
                    <tbody>

                    
                                    <?php
                                    while ($line = mysqli_fetch_array($ittime4)){ ?>
                                        <tr>
                                            <td class="col text-center"><?php echo strtoupper($line['subcode']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['section']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['tittle']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['status']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['start']); ?> / 
                                                <?php echo strtoupper($line['end']); ?>
                                            </td>
                                            <td class="col text-center"><?php echo strtoupper($line['schedule']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['getbuilding']); ?> <?php echo strtoupper($line['getroom']); ?>
                                            </td>
                                        </tr>
                                      
                                <?php }?>
                                </tbody>

          </table>
                                    </div>
</div>
        </div>
  </div>
                                          <hr>
                                         
                                          <h1 class="fw-bold text-center user-select-none" id="sp3" style="cursor: pointer;">PTC 201</h1>
  
  <div class="container text-center" id="t3" style="display:none;">
           <form class="text-center" method="POST">
              <a href = "mapping/map1.php"><input class="btn btn-success my-1 mb-3" type="button" name="create_pdf" value="GENERATE PDF"></a>
            <div class="container-fluid rounded-5">
      
        <div class="container-fluid px-5 rounded-5">
        <?php

        $rowz = mysqli_num_rows($ptc201time1);

        if($rowz == 7){
        echo'<h1 class="fw-bold text-center" style="color:red;">MONDAY</h1>';
        }else{
          echo'<h1 class="fw-bold text-center" style="color:green;">MONDAY</h1>';
        }


        
        ?>
        <?php

      if ($ptc2011->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
      }
      echo'  ||  ';
      if ($ptc2012->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
      }
      echo'  ||  ';
      if ($ptc2013->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
      }
      echo'  ||  ';
      if ($ptc2014->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
      }
      echo'  ||  ';
      if ($ptc2015->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
      }
      echo'  ||  ';
      if ($ptc2016->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
      }
      echo'  ||  ';
      if ($ptc2017->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
      }

      
          ?>
           <div class="table-responsive">
          <table class="table table-bordered bg-light border border-dark border-2">
                      <thead class="table-dark">
                      <tr class="text-center">
                        <th>Subject</th>
                        <th>Section</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Time</th>
                        <th>Day</th>
                        <th>Room</th>
                      </tr>
                    </thead>
                    <tbody>

                    
                                    <?php
                                    while ($line = mysqli_fetch_array($ptc201time1)){ ?>
                                        <tr>
                                            <td class="col text-center"><?php echo strtoupper($line['subcode']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['section']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['tittle']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['status']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['start']); ?> / 
                                                <?php echo strtoupper($line['end']); ?>
                                            </td>
                                            <td class="col text-center"><?php echo strtoupper($line['schedule']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['getbuilding']); ?> <?php echo strtoupper($line['getroom']); ?>
                                            </td>
                                        </tr>
                                      
                                <?php }?>
                                </tbody>

          </table>
                                    </div>
          <?php

        $rowz = mysqli_num_rows($ptc201time2);
     

        if($rowz == 7){
        echo'<h1 class="fw-bold text-center" style="color:red;">TUESDAY</h1>';
        }else{
          echo'<h1 class="fw-bold text-center" style="color:green;">TUESDAY</h1>';
        }

        ?>

<?php

if ($ptc2018->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}
echo'  ||  ';
if ($ptc2019->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}
echo'  ||  ';
if ($ptc20110->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}
echo'  ||  ';
if ($ptc20111->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}
echo'  ||  ';
if ($ptc20112->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}
echo'  ||  ';
if ($ptc20113->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}
echo'  ||  ';
if ($ptc20114->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}


    ?>
     <div class="table-responsive">
          <table class="table table-bordered bg-light border border-dark border-2">
                      <thead class="table-dark">
                      <tr class="text-center">
                        <th>Subject</th>
                        <th>Section</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Time</th>
                        <th>Day</th>
                        <th>Room</th>
                      </tr>
                    </thead>
                    <tbody>

                    
                                    <?php
                                    while ($line = mysqli_fetch_array($ptc201time2)){ ?>
                                        <tr>
                                            <td class="col text-center"><?php echo strtoupper($line['subcode']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['section']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['tittle']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['status']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['start']); ?> / 
                                                <?php echo strtoupper($line['end']); ?>
                                            </td>
                                            <td class="col text-center"><?php echo strtoupper($line['schedule']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['getbuilding']); ?> <?php echo strtoupper($line['getroom']); ?>
                                            </td>
                                        </tr>
                                      
                                <?php }?>
                                </tbody>

          </table>
                                    </div>
          <?php

        $rowz = mysqli_num_rows($ptc201time3);
      

        if($rowz == 7){
        echo'<h1 class="fw-bold text-center" style="color:red;">WEDNESDAY</h1>';
        }else{
          echo'<h1 class="fw-bold text-center" style="color:green;">WEDNESDAY</h1>';
        }

        ?>
        <?php

if ($ptc20115->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}
echo'  ||  ';
if ($ptc20116->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}
echo'  ||  ';
if ($ptc20117->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}
echo'  ||  ';
if ($ptc20118->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}
echo'  ||  ';
if ($ptc20119->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}
echo'  ||  ';
if ($ptc20120->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}
echo'  ||  ';
if ($ptc20121->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}


    ?>
     <div class="table-responsive">
          <table class="table table-bordered bg-light border border-dark border-2">
                      <thead class="table-dark">
                      <tr class="text-center">
                        <th>Subject</th>
                        <th>Section</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Time</th>
                        <th>Day</th>
                        <th>Room</th>
                      </tr>
                    </thead>
                    <tbody>

                    
                                    <?php
                                    while ($line = mysqli_fetch_array($ptc201time3)){ ?>
                                        <tr>
                                            <td class="col text-center"><?php echo strtoupper($line['subcode']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['section']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['tittle']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['status']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['start']); ?> / 
                                                <?php echo strtoupper($line['end']); ?>
                                            </td>
                                            <td class="col text-center"><?php echo strtoupper($line['schedule']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['getbuilding']); ?> <?php echo strtoupper($line['getroom']); ?>
                                            </td>
                                        </tr>
                                      
                                <?php }?>
                                </tbody>

          </table>
                                    </div>
          <?php

        $rowz = mysqli_num_rows($ptc201time4);

        if($rowz == 7){
        echo'<h1 class="fw-bold text-center" style="color:red;">THURSDAY</h1>';
        }else{
          echo'<h1 class="fw-bold text-center" style="color:green;">THURSDAY</h1>';
        }

        ?>
        <?php

if ($ptc20122->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}
echo'  ||  ';
if ($ptc20123->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}
echo'  ||  ';
if ($ptc20124->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}
echo'  ||  ';
if ($ptc20125->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}
echo'  ||  ';
if ($ptc20126->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}
echo'  ||  ';
if ($ptc20127->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}
echo'  ||  ';
if ($ptc20128->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}


    ?>
     <div class="table-responsive">
          <table class="table table-bordered bg-light border border-dark border-2">
                      <thead class="table-dark">
                      <tr class="text-center">
                        <th>Subject</th>
                        <th>Section</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Time</th>
                        <th>Day</th>
                        <th>Room</th>
                      </tr>
                    </thead>
                    <tbody>

                    
                                    <?php
                                    while ($line = mysqli_fetch_array($ptc201time4)){ ?>
                                        <tr>
                                            <td class="col text-center"><?php echo strtoupper($line['subcode']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['section']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['tittle']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['status']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['start']); ?> / 
                                                <?php echo strtoupper($line['end']); ?>
                                            </td>
                                            <td class="col text-center"><?php echo strtoupper($line['schedule']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['getbuilding']); ?> <?php echo strtoupper($line['getroom']); ?>
                                            </td>
                                        </tr>
                                      
                                <?php }?>
                                </tbody>

          </table>
                                    </div>
</div>
        </div>
  </div>
                                          <hr>
                                          <h1 class="fw-bold text-center user-select-none" id="sp4" style="cursor: pointer;">PTC 303</h1>
  
  <div class="container text-center" id="t4" style="display:none;">
           <form class="text-center" method="POST">
              <a href = "mapping/map1.php"><input class="btn btn-success my-1 mb-3" type="button" name="create_pdf" value="GENERATE PDF"></a>
            <div class="container-fluid rounded-5">
      
        <div class="container-fluid px-5 rounded-5">
        <?php

        $rowz = mysqli_num_rows($ptc303time1);

        if($rowz == 7){
        echo'<h1 class="fw-bold text-center" style="color:red;">MONDAY</h1>';
        }else{
          echo'<h1 class="fw-bold text-center" style="color:green;">MONDAY</h1>';
        }


        
        ?>
        <?php

      if ($ptc3031->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
      }
      echo'  ||  ';
      if ($ptc3032->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
      }
      echo'  ||  ';
      if ($ptc3033->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
      }
      echo'  ||  ';
      if ($ptc3034->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
      }
      echo'  ||  ';
      if ($ptc3035->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
      }
      echo'  ||  ';
      if ($ptc3036->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
      }
      echo'  ||  ';
      if ($ptc3037->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
      }

      
          ?>
           <div class="table-responsive">
          <table class="table table-bordered bg-light border border-dark border-2">
                      <thead class="table-dark">
                      <tr class="text-center">
                        <th>Subject</th>
                        <th>Section</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Time</th>
                        <th>Day</th>
                        <th>Room</th>
                      </tr>
                    </thead>
                    <tbody>

                    
                                    <?php
                                    while ($line = mysqli_fetch_array($ptc303time1)){ ?>
                                        <tr>
                                            <td class="col text-center"><?php echo strtoupper($line['subcode']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['section']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['tittle']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['status']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['start']); ?> / 
                                                <?php echo strtoupper($line['end']); ?>
                                            </td>
                                            <td class="col text-center"><?php echo strtoupper($line['schedule']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['getbuilding']); ?> <?php echo strtoupper($line['getroom']); ?>
                                            </td>
                                        </tr>
                                      
                                <?php }?>
                                </tbody>

          </table>
                                    </div>
          <?php

        $rowz = mysqli_num_rows($ptc303time2);
     

        if($rowz == 7){
        echo'<h1 class="fw-bold text-center" style="color:red;">TUESDAY</h1>';
        }else{
          echo'<h1 class="fw-bold text-center" style="color:green;">TUESDAY</h1>';
        }

        ?>

<?php

if ($ptc3038->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}
echo'  ||  ';
if ($ptc3039->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}
echo'  ||  ';
if ($ptc30310->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}
echo'  ||  ';
if ($ptc30311->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}
echo'  ||  ';
if ($ptc30312->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}
echo'  ||  ';
if ($ptc30313->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}
echo'  ||  ';
if ($ptc30314->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}


    ?>
     <div class="table-responsive">
          <table class="table table-bordered bg-light border border-dark border-2">
                      <thead class="table-dark">
                      <tr class="text-center">
                        <th>Subject</th>
                        <th>Section</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Time</th>
                        <th>Day</th>
                        <th>Room</th>
                      </tr>
                    </thead>
                    <tbody>

                    
                                    <?php
                                    while ($line = mysqli_fetch_array($ptc303time2)){ ?>
                                        <tr>
                                            <td class="col text-center"><?php echo strtoupper($line['subcode']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['section']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['tittle']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['status']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['start']); ?> / 
                                                <?php echo strtoupper($line['end']); ?>
                                            </td>
                                            <td class="col text-center"><?php echo strtoupper($line['schedule']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['getbuilding']); ?> <?php echo strtoupper($line['getroom']); ?>
                                            </td>
                                        </tr>
                                      
                                <?php }?>
                                </tbody>

          </table>
                                    </div>
          <?php

        $rowz = mysqli_num_rows($ptc303time3);
      

        if($rowz == 7){
        echo'<h1 class="fw-bold text-center" style="color:red;">WEDNESDAY</h1>';
        }else{
          echo'<h1 class="fw-bold text-center" style="color:green;">WEDNESDAY</h1>';
        }

        ?>
        <?php

if ($ptc30315->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}
echo'  ||  ';
if ($ptc30316->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}
echo'  ||  ';
if ($ptc30317->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}
echo'  ||  ';
if ($ptc30318->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}
echo'  ||  ';
if ($ptc30319->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}
echo'  ||  ';
if ($ptc30320->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}
echo'  ||  ';
if ($ptc30321->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}


    ?>
     <div class="table-responsive">
          <table class="table table-bordered bg-light border border-dark border-2">
                      <thead class="table-dark">
                      <tr class="text-center">
                        <th>Subject</th>
                        <th>Section</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Time</th>
                        <th>Day</th>
                        <th>Room</th>
                      </tr>
                    </thead>
                    <tbody>

                    
                                    <?php
                                    while ($line = mysqli_fetch_array($ptc303time3)){ ?>
                                        <tr>
                                            <td class="col text-center"><?php echo strtoupper($line['subcode']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['section']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['tittle']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['status']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['start']); ?> / 
                                                <?php echo strtoupper($line['end']); ?>
                                            </td>
                                            <td class="col text-center"><?php echo strtoupper($line['schedule']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['getbuilding']); ?> <?php echo strtoupper($line['getroom']); ?>
                                            </td>
                                        </tr>
                                      
                                <?php }?>
                                </tbody>

          </table>
                                    </div>
          <?php

        $rowz = mysqli_num_rows($ptc303time4);

        if($rowz == 7){
        echo'<h1 class="fw-bold text-center" style="color:red;">THURSDAY</h1>';
        }else{
          echo'<h1 class="fw-bold text-center" style="color:green;">THURSDAY</h1>';
        }

        ?>
        <?php

if ($ptc30322->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}
echo'  ||  ';
if ($ptc30323->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}
echo'  ||  ';
if ($ptc30324->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}
echo'  ||  ';
if ($ptc30325->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}
echo'  ||  ';
if ($ptc30326->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}
echo'  ||  ';
if ($ptc30327->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}
echo'  ||  ';
if ($ptc30328->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}


    ?>
     <div class="table-responsive">
          <table class="table table-bordered bg-light border border-dark border-2">
                      <thead class="table-dark">
                      <tr class="text-center">
                        <th>Subject</th>
                        <th>Section</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Time</th>
                        <th>Day</th>
                        <th>Room</th>
                      </tr>
                    </thead>
                    <tbody>

                    
                                    <?php
                                    while ($line = mysqli_fetch_array($ptc303time4)){ ?>
                                        <tr>
                                            <td class="col text-center"><?php echo strtoupper($line['subcode']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['section']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['tittle']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['status']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['start']); ?> / 
                                                <?php echo strtoupper($line['end']); ?>
                                            </td>
                                            <td class="col text-center"><?php echo strtoupper($line['schedule']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['getbuilding']); ?> <?php echo strtoupper($line['getroom']); ?>
                                            </td>
                                        </tr>
                                      
                                <?php }?>
                                </tbody>

          </table>
                                    </div>
</div>
        </div>
  </div>
                                       
                                          <hr>
                                         
                                          <h1 class="fw-bold text-center user-select-none" id="sp5" style="cursor: pointer;">PTC 304</h1>
  
  <div class="container text-center" id="t5" style="display:none;">
           <form class="text-center" method="POST">
              <a href = "mapping/map1.php"><input class="btn btn-success my-1 mb-3" type="button" name="create_pdf" value="GENERATE PDF"></a>
            <div class="container-fluid rounded-5">
      
        <div class="container-fluid px-5 rounded-5">
        <?php

        $rowz = mysqli_num_rows($ptc304time1);

        if($rowz == 7){
        echo'<h1 class="fw-bold text-center" style="color:red;">MONDAY</h1>';
        }else{
          echo'<h1 class="fw-bold text-center" style="color:green;">MONDAY</h1>';
        }


        
        ?>
        <?php

      if ($ptc3041->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
      }
      echo'  ||  ';
      if ($ptc3042->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
      }
      echo'  ||  ';
      if ($ptc3043->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
      }
      echo'  ||  ';
      if ($ptc3044->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
      }
      echo'  ||  ';
      if ($ptc3045->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
      }
      echo'  ||  ';
      if ($ptc3046->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
      }
      echo'  ||  ';
      if ($ptc3047->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
      }

      
          ?>
           <div class="table-responsive">
          <table class="table table-bordered bg-light border border-dark border-2">
                      <thead class="table-dark">
                      <tr class="text-center">
                        <th>Subject</th>
                        <th>Section</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Time</th>
                        <th>Day</th>
                        <th>Room</th>
                      </tr>
                    </thead>
                    <tbody>

                    
                                    <?php
                                    while ($line = mysqli_fetch_array($ptc304time1)){ ?>
                                        <tr>
                                            <td class="col text-center"><?php echo strtoupper($line['subcode']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['section']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['tittle']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['status']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['start']); ?> / 
                                                <?php echo strtoupper($line['end']); ?>
                                            </td>
                                            <td class="col text-center"><?php echo strtoupper($line['schedule']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['getbuilding']); ?> <?php echo strtoupper($line['getroom']); ?>
                                            </td>
                                        </tr>
                                      
                                <?php }?>
                                </tbody>

          </table>
                                    </div>
          <?php

        $rowz = mysqli_num_rows($ptc304time2);
     

        if($rowz == 7){
        echo'<h1 class="fw-bold text-center" style="color:red;">TUESDAY</h1>';
        }else{
          echo'<h1 class="fw-bold text-center" style="color:green;">TUESDAY</h1>';
        }

        ?>

<?php

if ($ptc2018->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}
echo'  ||  ';
if ($ptc2019->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}
echo'  ||  ';
if ($ptc20110->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}
echo'  ||  ';
if ($ptc20111->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}
echo'  ||  ';
if ($ptc20112->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}
echo'  ||  ';
if ($ptc20113->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}
echo'  ||  ';
if ($ptc20114->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}


    ?>
     <div class="table-responsive">
          <table class="table table-bordered bg-light border border-dark border-2">
                      <thead class="table-dark">
                      <tr class="text-center">
                        <th>Subject</th>
                        <th>Section</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Time</th>
                        <th>Day</th>
                        <th>Room</th>
                      </tr>
                    </thead>
                    <tbody>

                    
                                    <?php
                                    while ($line = mysqli_fetch_array($ptc304time2)){ ?>
                                        <tr>
                                            <td class="col text-center"><?php echo strtoupper($line['subcode']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['section']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['tittle']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['status']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['start']); ?> / 
                                                <?php echo strtoupper($line['end']); ?>
                                            </td>
                                            <td class="col text-center"><?php echo strtoupper($line['schedule']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['getbuilding']); ?> <?php echo strtoupper($line['getroom']); ?>
                                            </td>
                                        </tr>
                                      
                                <?php }?>
                                </tbody>

          </table>
                                    </div>
          <?php

        $rowz = mysqli_num_rows($ptc304time3);
      

        if($rowz == 7){
        echo'<h1 class="fw-bold text-center" style="color:red;">WEDNESDAY</h1>';
        }else{
          echo'<h1 class="fw-bold text-center" style="color:green;">WEDNESDAY</h1>';
        }

        ?>
        <?php

if ($ptc30415->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}
echo'  ||  ';
if ($ptc30416->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}
echo'  ||  ';
if ($ptc30417->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}
echo'  ||  ';
if ($ptc30418->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}
echo'  ||  ';
if ($ptc30419->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}
echo'  ||  ';
if ($ptc30420->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}
echo'  ||  ';
if ($ptc30421->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}


    ?>
     <div class="table-responsive">
          <table class="table table-bordered bg-light border border-dark border-2">
                      <thead class="table-dark">
                      <tr class="text-center">
                        <th>Subject</th>
                        <th>Section</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Time</th>
                        <th>Day</th>
                        <th>Room</th>
                      </tr>
                    </thead>
                    <tbody>

                    
                                    <?php
                                    while ($line = mysqli_fetch_array($ptc304time3)){ ?>
                                        <tr>
                                            <td class="col text-center"><?php echo strtoupper($line['subcode']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['section']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['tittle']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['status']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['start']); ?> / 
                                                <?php echo strtoupper($line['end']); ?>
                                            </td>
                                            <td class="col text-center"><?php echo strtoupper($line['schedule']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['getbuilding']); ?> <?php echo strtoupper($line['getroom']); ?>
                                            </td>
                                        </tr>
                                      
                                <?php }?>
                                </tbody>

          </table>
                                    </div>
          <?php

        $rowz = mysqli_num_rows($ptc304time4);

        if($rowz == 7){
        echo'<h1 class="fw-bold text-center" style="color:red;">THURSDAY</h1>';
        }else{
          echo'<h1 class="fw-bold text-center" style="color:green;">THURSDAY</h1>';
        }

        ?>
        <?php

if ($ptc30422->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}
echo'  ||  ';
if ($ptc30423->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}
echo'  ||  ';
if ($ptc30424->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}
echo'  ||  ';
if ($ptc30425->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}
echo'  ||  ';
if ($ptc30426->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}
echo'  ||  ';
if ($ptc30427->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}
echo'  ||  ';
if ($ptc30428->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}


    ?>
     <div class="table-responsive">
          <table class="table table-bordered bg-light border border-dark border-2">
                      <thead class="table-dark">
                      <tr class="text-center">
                        <th>Subject</th>
                        <th>Section</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Time</th>
                        <th>Day</th>
                        <th>Room</th>
                      </tr>
                    </thead>
                    <tbody>

                    
                                    <?php
                                    while ($line = mysqli_fetch_array($ptc304time4)){ ?>
                                        <tr>
                                            <td class="col text-center"><?php echo strtoupper($line['subcode']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['section']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['tittle']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['status']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['start']); ?> / 
                                                <?php echo strtoupper($line['end']); ?>
                                            </td>
                                            <td class="col text-center"><?php echo strtoupper($line['schedule']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['getbuilding']); ?> <?php echo strtoupper($line['getroom']); ?>
                                            </td>
                                        </tr>
                                      
                                <?php }?>
                                </tbody>

          </table>
                                    </div>
</div>
        </div>
  </div>
                                          <hr>
                                          
                                          <h1 class="fw-bold text-center user-select-none" id="sp6" style="cursor: pointer;">PTC 305</h1>
  
  <div class="container text-center" id="t6" style="display:none;">
           <form class="text-center" method="POST">
              <a href = "mapping/map1.php"><input class="btn btn-success my-1 mb-3" type="button" name="create_pdf" value="GENERATE PDF"></a>
            <div class="container-fluid rounded-5">
      
        <div class="container-fluid px-5 rounded-5">
        <?php

        $rowz = mysqli_num_rows($ptc305time1);

        if($rowz == 7){
        echo'<h1 class="fw-bold text-center" style="color:red;">MONDAY</h1>';
        }else{
          echo'<h1 class="fw-bold text-center" style="color:green;">MONDAY</h1>';
        }


        
        ?>
        <?php

      if ($ptc3051->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
      }
      echo'  ||  ';
      if ($ptc3052->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
      }
      echo'  ||  ';
      if ($ptc3053->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
      }
      echo'  ||  ';
      if ($ptc3054->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
      }
      echo'  ||  ';
      if ($ptc3055->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
      }
      echo'  ||  ';
      if ($ptc3056->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
      }
      echo'  ||  ';
      if ($ptc3057->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
      }

      
          ?>
           <div class="table-responsive">
          <table class="table table-bordered bg-light border border-dark border-2">
                      <thead class="table-dark">
                      <tr class="text-center">
                        <th>Subject</th>
                        <th>Section</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Time</th>
                        <th>Day</th>
                        <th>Room</th>
                      </tr>
                    </thead>
                    <tbody>

                    
                                    <?php
                                    while ($line = mysqli_fetch_array($ptc305time1)){ ?>
                                        <tr>
                                            <td class="col text-center"><?php echo strtoupper($line['subcode']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['section']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['tittle']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['status']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['start']); ?> / 
                                                <?php echo strtoupper($line['end']); ?>
                                            </td>
                                            <td class="col text-center"><?php echo strtoupper($line['schedule']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['getbuilding']); ?> <?php echo strtoupper($line['getroom']); ?>
                                            </td>
                                        </tr>
                                      
                                <?php }?>
                                </tbody>

          </table>
                                    </div>
          <?php

        $rowz = mysqli_num_rows($ptc305time2);
     

        if($rowz == 7){
        echo'<h1 class="fw-bold text-center" style="color:red;">TUESDAY</h1>';
        }else{
          echo'<h1 class="fw-bold text-center" style="color:green;">TUESDAY</h1>';
        }

        ?>

<?php

if ($ptc3058->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}
echo'  ||  ';
if ($ptc3059->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}
echo'  ||  ';
if ($ptc30510->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}
echo'  ||  ';
if ($ptc30511->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}
echo'  ||  ';
if ($ptc30512->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}
echo'  ||  ';
if ($ptc30513->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}
echo'  ||  ';
if ($ptc30514->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}


    ?>
     <div class="table-responsive">
          <table class="table table-bordered bg-light border border-dark border-2">
                      <thead class="table-dark">
                      <tr class="text-center">
                        <th>Subject</th>
                        <th>Section</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Time</th>
                        <th>Day</th>
                        <th>Room</th>
                      </tr>
                    </thead>
                    <tbody>

                    
                                    <?php
                                    while ($line = mysqli_fetch_array($ptc305time2)){ ?>
                                        <tr>
                                            <td class="col text-center"><?php echo strtoupper($line['subcode']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['section']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['tittle']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['status']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['start']); ?> / 
                                                <?php echo strtoupper($line['end']); ?>
                                            </td>
                                            <td class="col text-center"><?php echo strtoupper($line['schedule']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['getbuilding']); ?> <?php echo strtoupper($line['getroom']); ?>
                                            </td>
                                        </tr>
                                      
                                <?php }?>
                                </tbody>

          </table>
                                    </div>
          <?php

        $rowz = mysqli_num_rows($ptc305time3);
      

        if($rowz == 7){
        echo'<h1 class="fw-bold text-center" style="color:red;">WEDNESDAY</h1>';
        }else{
          echo'<h1 class="fw-bold text-center" style="color:green;">WEDNESDAY</h1>';
        }

        ?>
        <?php

if ($ptc30515->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}
echo'  ||  ';
if ($ptc30516->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}
echo'  ||  ';
if ($ptc30517->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}
echo'  ||  ';
if ($ptc30518->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}
echo'  ||  ';
if ($ptc30519->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}
echo'  ||  ';
if ($ptc30520->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}
echo'  ||  ';
if ($ptc30521->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}


    ?>
     <div class="table-responsive">
          <table class="table table-bordered bg-light border border-dark border-2">
                      <thead class="table-dark">
                      <tr class="text-center">
                        <th>Subject</th>
                        <th>Section</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Time</th>
                        <th>Day</th>
                        <th>Room</th>
                      </tr>
                    </thead>
                    <tbody>

                    
                                    <?php
                                    while ($line = mysqli_fetch_array($ptc305time3)){ ?>
                                        <tr>
                                            <td class="col text-center"><?php echo strtoupper($line['subcode']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['section']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['tittle']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['status']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['start']); ?> / 
                                                <?php echo strtoupper($line['end']); ?>
                                            </td>
                                            <td class="col text-center"><?php echo strtoupper($line['schedule']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['getbuilding']); ?> <?php echo strtoupper($line['getroom']); ?>
                                            </td>
                                        </tr>
                                      
                                <?php }?>
                                </tbody>

          </table>
                                    </div>
          <?php

        $rowz = mysqli_num_rows($ptc305time4);

        if($rowz == 7){
        echo'<h1 class="fw-bold text-center" style="color:red;">THURSDAY</h1>';
        }else{
          echo'<h1 class="fw-bold text-center" style="color:green;">THURSDAY</h1>';
        }

        ?>
        <?php

if ($ptc30522->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}
echo'  ||  ';
if ($ptc30523->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}
echo'  ||  ';
if ($ptc30524->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}
echo'  ||  ';
if ($ptc30525->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}
echo'  ||  ';
if ($ptc30526->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}
echo'  ||  ';
if ($ptc30527->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}
echo'  ||  ';
if ($ptc30528->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}


    ?>
     <div class="table-responsive">
          <table class="table table-bordered bg-light border border-dark border-2">
                      <thead class="table-dark">
                      <tr class="text-center">
                        <th>Subject</th>
                        <th>Section</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Time</th>
                        <th>Day</th>
                        <th>Room</th>
                      </tr>
                    </thead>
                    <tbody>

                    
                                    <?php
                                    while ($line = mysqli_fetch_array($ptc305time4)){ ?>
                                        <tr>
                                            <td class="col text-center"><?php echo strtoupper($line['subcode']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['section']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['tittle']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['status']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['start']); ?> / 
                                                <?php echo strtoupper($line['end']); ?>
                                            </td>
                                            <td class="col text-center"><?php echo strtoupper($line['schedule']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['getbuilding']); ?> <?php echo strtoupper($line['getroom']); ?>
                                            </td>
                                        </tr>
                                      
                                <?php }?>
                                </tbody>

          </table>
                                    </div>
</div>
        </div>
  </div>
                                          <hr>
                                          
                                          <h1 class="fw-bold text-center user-select-none" id="sp7" style="cursor: pointer;">PTC 306</h1>
  
  <div class="container text-center" id="t7" style="display:none;">
           <form class="text-center" method="POST">
              <a href = "mapping/map1.php"><input class="btn btn-success my-1 mb-3" type="button" name="create_pdf" value="GENERATE PDF"></a>
            <div class="container-fluid rounded-5">
      
        <div class="container-fluid px-5 rounded-5">
        <?php

        $rowz = mysqli_num_rows($ptc306time1);

        if($rowz == 7){
        echo'<h1 class="fw-bold text-center" style="color:red;">MONDAY</h1>';
        }else{
          echo'<h1 class="fw-bold text-center" style="color:green;">MONDAY</h1>';
        }


        
        ?>
        <?php

      if ($ptc3061->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
      }
      echo'  ||  ';
      if ($ptc3062->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
      }
      echo'  ||  ';
      if ($ptc3063->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
      }
      echo'  ||  ';
      if ($ptc3064->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
      }
      echo'  ||  ';
      if ($ptc3065->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
      }
      echo'  ||  ';
      if ($ptc3066->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
      }
      echo'  ||  ';
      if ($ptc3067->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
      }

      
          ?>
           <div class="table-responsive">
          <table class="table table-bordered bg-light border border-dark border-2">
                      <thead class="table-dark">
                      <tr class="text-center">
                        <th>Subject</th>
                        <th>Section</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Time</th>
                        <th>Day</th>
                        <th>Room</th>
                      </tr>
                    </thead>
                    <tbody>

                    
                                    <?php
                                    while ($line = mysqli_fetch_array($ptc306time1)){ ?>
                                        <tr>
                                            <td class="col text-center"><?php echo strtoupper($line['subcode']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['section']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['tittle']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['status']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['start']); ?> / 
                                                <?php echo strtoupper($line['end']); ?>
                                            </td>
                                            <td class="col text-center"><?php echo strtoupper($line['schedule']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['getbuilding']); ?> <?php echo strtoupper($line['getroom']); ?>
                                            </td>
                                        </tr>
                                      
                                <?php }?>
                                </tbody>

          </table>
                                    </div>
          <?php

        $rowz = mysqli_num_rows($ptc306time2);
     

        if($rowz == 7){
        echo'<h1 class="fw-bold text-center" style="color:red;">TUESDAY</h1>';
        }else{
          echo'<h1 class="fw-bold text-center" style="color:green;">TUESDAY</h1>';
        }

        ?>

<?php

if ($ptc3068->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}
echo'  ||  ';
if ($ptc3069->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}
echo'  ||  ';
if ($ptc30610->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}
echo'  ||  ';
if ($ptc30611->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}
echo'  ||  ';
if ($ptc30612->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}
echo'  ||  ';
if ($ptc30613->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}
echo'  ||  ';
if ($ptc30614->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}


    ?>
     <div class="table-responsive">
          <table class="table table-bordered bg-light border border-dark border-2">
                      <thead class="table-dark">
                      <tr class="text-center">
                        <th>Subject</th>
                        <th>Section</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Time</th>
                        <th>Day</th>
                        <th>Room</th>
                      </tr>
                    </thead>
                    <tbody>

                    
                                    <?php
                                    while ($line = mysqli_fetch_array($ptc306time2)){ ?>
                                        <tr>
                                            <td class="col text-center"><?php echo strtoupper($line['subcode']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['section']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['tittle']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['status']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['start']); ?> / 
                                                <?php echo strtoupper($line['end']); ?>
                                            </td>
                                            <td class="col text-center"><?php echo strtoupper($line['schedule']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['getbuilding']); ?> <?php echo strtoupper($line['getroom']); ?>
                                            </td>
                                        </tr>
                                      
                                <?php }?>
                                </tbody>

          </table>
                                    </div>
          <?php

        $rowz = mysqli_num_rows($ptc306time3);
      

        if($rowz == 7){
        echo'<h1 class="fw-bold text-center" style="color:red;">WEDNESDAY</h1>';
        }else{
          echo'<h1 class="fw-bold text-center" style="color:green;">WEDNESDAY</h1>';
        }

        ?>
        <?php

if ($ptc30615->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}
echo'  ||  ';
if ($ptc30616->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}
echo'  ||  ';
if ($ptc30617->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}
echo'  ||  ';
if ($ptc30618->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}
echo'  ||  ';
if ($ptc30619->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}
echo'  ||  ';
if ($ptc30620->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}
echo'  ||  ';
if ($ptc30621->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}


    ?>
     <div class="table-responsive">
          <table class="table table-bordered bg-light border border-dark border-2">
                      <thead class="table-dark">
                      <tr class="text-center">
                        <th>Subject</th>
                        <th>Section</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Time</th>
                        <th>Day</th>
                        <th>Room</th>
                      </tr>
                    </thead>
                    <tbody>

                    
                                    <?php
                                    while ($line = mysqli_fetch_array($ptc306time3)){ ?>
                                        <tr>
                                            <td class="col text-center"><?php echo strtoupper($line['subcode']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['section']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['tittle']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['status']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['start']); ?> / 
                                                <?php echo strtoupper($line['end']); ?>
                                            </td>
                                            <td class="col text-center"><?php echo strtoupper($line['schedule']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['getbuilding']); ?> <?php echo strtoupper($line['getroom']); ?>
                                            </td>
                                        </tr>
                                      
                                <?php }?>
                                </tbody>

          </table>
                                    </div>
          <?php

        $rowz = mysqli_num_rows($ptc306time4);

        if($rowz == 7){
        echo'<h1 class="fw-bold text-center" style="color:red;">THURSDAY</h1>';
        }else{
          echo'<h1 class="fw-bold text-center" style="color:green;">THURSDAY</h1>';
        }

        ?>
        <?php

if ($ptc30622->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}
echo'  ||  ';
if ($ptc30623->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}
echo'  ||  ';
if ($ptc30624->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}
echo'  ||  ';
if ($ptc30625->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}
echo'  ||  ';
if ($ptc30626->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}
echo'  ||  ';
if ($ptc30627->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}
echo'  ||  ';
if ($ptc30628->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}


    ?>
     <div class="table-responsive">
          <table class="table table-bordered bg-light border border-dark border-2">
                      <thead class="table-dark">
                      <tr class="text-center">
                        <th>Subject</th>
                        <th>Section</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Time</th>
                        <th>Day</th>
                        <th>Room</th>
                      </tr>
                    </thead>
                    <tbody>

                    
                                    <?php
                                    while ($line = mysqli_fetch_array($ptc306time4)){ ?>
                                        <tr>
                                            <td class="col text-center"><?php echo strtoupper($line['subcode']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['section']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['tittle']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['status']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['start']); ?> / 
                                                <?php echo strtoupper($line['end']); ?>
                                            </td>
                                            <td class="col text-center"><?php echo strtoupper($line['schedule']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['getbuilding']); ?> <?php echo strtoupper($line['getroom']); ?>
                                            </td>
                                        </tr>
                                      
                                <?php }?>
                                </tbody>

          </table>
                                    </div>
</div>
        </div>
  </div>
                                          <hr>
                                         
                                          <h1 class="fw-bold text-center user-select-none" id="sp8" style="cursor: pointer;">PTC 403</h1>
  
  <div class="container text-center" id="t8" style="display:none;">
           <form class="text-center" method="POST">
              <a href = "mapping/map1.php"><input class="btn btn-success my-1 mb-3" type="button" name="create_pdf" value="GENERATE PDF"></a>
            <div class="container-fluid rounded-5">
      
        <div class="container-fluid px-5 rounded-5">
        <?php

        $rowz = mysqli_num_rows($ptc403time1);

        if($rowz == 7){
        echo'<h1 class="fw-bold text-center" style="color:red;">MONDAY</h1>';
        }else{
          echo'<h1 class="fw-bold text-center" style="color:green;">MONDAY</h1>';
        }


        
        ?>
        <?php

      if ($ptc4031->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
      }
      echo'  ||  ';
      if ($ptc4032->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
      }
      echo'  ||  ';
      if ($ptc4033->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
      }
      echo'  ||  ';
      if ($ptc4034->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
      }
      echo'  ||  ';
      if ($ptc4035->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
      }
      echo'  ||  ';
      if ($ptc4036->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
      }
      echo'  ||  ';
      if ($ptc4037->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
      }

      
          ?>
           <div class="table-responsive">
          <table class="table table-bordered bg-light border border-dark border-2">
                      <thead class="table-dark">
                      <tr class="text-center">
                        <th>Subject</th>
                        <th>Section</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Time</th>
                        <th>Day</th>
                        <th>Room</th>
                      </tr>
                    </thead>
                    <tbody>

                    
                                    <?php
                                    while ($line = mysqli_fetch_array($ptc403time1)){ ?>
                                        <tr>
                                            <td class="col text-center"><?php echo strtoupper($line['subcode']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['section']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['tittle']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['status']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['start']); ?> / 
                                                <?php echo strtoupper($line['end']); ?>
                                            </td>
                                            <td class="col text-center"><?php echo strtoupper($line['schedule']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['getbuilding']); ?> <?php echo strtoupper($line['getroom']); ?>
                                            </td>
                                        </tr>
                                      
                                <?php }?>
                                </tbody>

          </table>
                                    </div>
          <?php

        $rowz = mysqli_num_rows($ptc403time2);
     

        if($rowz == 7){
        echo'<h1 class="fw-bold text-center" style="color:red;">TUESDAY</h1>';
        }else{
          echo'<h1 class="fw-bold text-center" style="color:green;">TUESDAY</h1>';
        }

        ?>

<?php

if ($ptc4038->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}
echo'  ||  ';
if ($ptc4039->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}
echo'  ||  ';
if ($ptc40310->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}
echo'  ||  ';
if ($ptc40311->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}
echo'  ||  ';
if ($ptc40312->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}
echo'  ||  ';
if ($ptc40313->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}
echo'  ||  ';
if ($ptc40314->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}


    ?>
     <div class="table-responsive">
          <table class="table table-bordered bg-light border border-dark border-2">
                      <thead class="table-dark">
                      <tr class="text-center">
                        <th>Subject</th>
                        <th>Section</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Time</th>
                        <th>Day</th>
                        <th>Room</th>
                      </tr>
                    </thead>
                    <tbody>

                    
                                    <?php
                                    while ($line = mysqli_fetch_array($ptc403time2)){ ?>
                                        <tr>
                                            <td class="col text-center"><?php echo strtoupper($line['subcode']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['section']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['tittle']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['status']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['start']); ?> / 
                                                <?php echo strtoupper($line['end']); ?>
                                            </td>
                                            <td class="col text-center"><?php echo strtoupper($line['schedule']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['getbuilding']); ?> <?php echo strtoupper($line['getroom']); ?>
                                            </td>
                                        </tr>
                                      
                                <?php }?>
                                </tbody>

          </table>
                                    </div>
          <?php

        $rowz = mysqli_num_rows($ptc403time3);
      

        if($rowz == 7){
        echo'<h1 class="fw-bold text-center" style="color:red;">WEDNESDAY</h1>';
        }else{
          echo'<h1 class="fw-bold text-center" style="color:green;">WEDNESDAY</h1>';
        }

        ?>
        <?php

if ($ptc40315->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}
echo'  ||  ';
if ($ptc40316->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}
echo'  ||  ';
if ($ptc40317->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}
echo'  ||  ';
if ($ptc40318->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}
echo'  ||  ';
if ($ptc40319->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}
echo'  ||  ';
if ($ptc40320->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}
echo'  ||  ';
if ($ptc40321->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}


    ?>
     <div class="table-responsive">
          <table class="table table-bordered bg-light border border-dark border-2">
                      <thead class="table-dark">
                      <tr class="text-center">
                        <th>Subject</th>
                        <th>Section</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Time</th>
                        <th>Day</th>
                        <th>Room</th>
                      </tr>
                    </thead>
                    <tbody>

                    
                                    <?php
                                    while ($line = mysqli_fetch_array($ptc403time3)){ ?>
                                        <tr>
                                            <td class="col text-center"><?php echo strtoupper($line['subcode']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['section']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['tittle']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['status']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['start']); ?> / 
                                                <?php echo strtoupper($line['end']); ?>
                                            </td>
                                            <td class="col text-center"><?php echo strtoupper($line['schedule']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['getbuilding']); ?> <?php echo strtoupper($line['getroom']); ?>
                                            </td>
                                        </tr>
                                      
                                <?php }?>
                                </tbody>

          </table>
                                    </div>
          <?php

        $rowz = mysqli_num_rows($ptc403time4);

        if($rowz == 7){
        echo'<h1 class="fw-bold text-center" style="color:red;">THURSDAY</h1>';
        }else{
          echo'<h1 class="fw-bold text-center" style="color:green;">THURSDAY</h1>';
        }

        ?>
        <?php

if ($ptc40322->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}
echo'  ||  ';
if ($ptc40323->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}
echo'  ||  ';
if ($ptc40324->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}
echo'  ||  ';
if ($ptc40325->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}
echo'  ||  ';
if ($ptc40326->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}
echo'  ||  ';
if ($ptc40327->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}
echo'  ||  ';
if ($ptc40328->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}


    ?>
     <div class="table-responsive">
          <table class="table table-bordered bg-light border border-dark border-2">
                      <thead class="table-dark">
                      <tr class="text-center">
                        <th>Subject</th>
                        <th>Section</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Time</th>
                        <th>Day</th>
                        <th>Room</th>
                      </tr>
                    </thead>
                    <tbody>

                    
                                    <?php
                                    while ($line = mysqli_fetch_array($ptc403time4)){ ?>
                                        <tr>
                                            <td class="col text-center"><?php echo strtoupper($line['subcode']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['section']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['tittle']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['status']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['start']); ?> / 
                                                <?php echo strtoupper($line['end']); ?>
                                            </td>
                                            <td class="col text-center"><?php echo strtoupper($line['schedule']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['getbuilding']); ?> <?php echo strtoupper($line['getroom']); ?>
                                            </td>
                                        </tr>
                                      
                                <?php }?>
                                </tbody>

          </table>
                                    </div>
</div>
        </div>
  </div>
  <hr>
  <h1 class="fw-bold text-center user-select-none" id="sp9" style="cursor: pointer;">PTC 404</h1>
  
  <div class="container text-center" id="t9" style="display:none;">
           <form class="text-center" method="POST">
              <a href = "mapping/map1.php"><input class="btn btn-success my-1 mb-3" type="button" name="create_pdf" value="GENERATE PDF"></a>
            <div class="container-fluid rounded-5">
      
        <div class="container-fluid px-5 rounded-5">
        <?php

        $rowz = mysqli_num_rows($ptc404time1);

        if($rowz == 7){
        echo'<h1 class="fw-bold text-center" style="color:red;">MONDAY</h1>';
        }else{
          echo'<h1 class="fw-bold text-center" style="color:green;">MONDAY</h1>';
        }


        
        ?>
        <?php

      if ($ptc4041->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
      }
      echo'  ||  ';
      if ($ptc4042->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
      }
      echo'  ||  ';
      if ($ptc4043->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
      }
      echo'  ||  ';
      if ($ptc4044->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
      }
      echo'  ||  ';
      if ($ptc4045->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
      }
      echo'  ||  ';
      if ($ptc4046->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
      }
      echo'  ||  ';
      if ($ptc4047->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
      }

      
          ?>
           <div class="table-responsive">
          <table class="table table-bordered bg-light border border-dark border-2">
                      <thead class="table-dark">
                      <tr class="text-center">
                        <th>Subject</th>
                        <th>Section</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Time</th>
                        <th>Day</th>
                        <th>Room</th>
                      </tr>
                    </thead>
                    <tbody>

                    
                                    <?php
                                    while ($line = mysqli_fetch_array($ptc404time1)){ ?>
                                        <tr>
                                            <td class="col text-center"><?php echo strtoupper($line['subcode']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['section']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['tittle']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['status']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['start']); ?> / 
                                                <?php echo strtoupper($line['end']); ?>
                                            </td>
                                            <td class="col text-center"><?php echo strtoupper($line['schedule']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['getbuilding']); ?> <?php echo strtoupper($line['getroom']); ?>
                                            </td>
                                        </tr>
                                      
                                <?php }?>
                                </tbody>

          </table>
                                    </div>
          <?php

        $rowz = mysqli_num_rows($ptc404time2);
     

        if($rowz == 7){
        echo'<h1 class="fw-bold text-center" style="color:red;">TUESDAY</h1>';
        }else{
          echo'<h1 class="fw-bold text-center" style="color:green;">TUESDAY</h1>';
        }

        ?>

<?php

if ($ptc4048->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}
echo'  ||  ';
if ($ptc4049->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}
echo'  ||  ';
if ($ptc40410->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}
echo'  ||  ';
if ($ptc40411->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}
echo'  ||  ';
if ($ptc40412->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}
echo'  ||  ';
if ($ptc40413->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}
echo'  ||  ';
if ($ptc40414->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}


    ?>
     <div class="table-responsive">
          <table class="table table-bordered bg-light border border-dark border-2">
                      <thead class="table-dark">
                      <tr class="text-center">
                        <th>Subject</th>
                        <th>Section</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Time</th>
                        <th>Day</th>
                        <th>Room</th>
                      </tr>
                    </thead>
                    <tbody>

                    
                                    <?php
                                    while ($line = mysqli_fetch_array($ptc404time2)){ ?>
                                        <tr>
                                            <td class="col text-center"><?php echo strtoupper($line['subcode']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['section']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['tittle']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['status']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['start']); ?> / 
                                                <?php echo strtoupper($line['end']); ?>
                                            </td>
                                            <td class="col text-center"><?php echo strtoupper($line['schedule']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['getbuilding']); ?> <?php echo strtoupper($line['getroom']); ?>
                                            </td>
                                        </tr>
                                      
                                <?php }?>
                                </tbody>

          </table>
                                    </div>
          <?php

        $rowz = mysqli_num_rows($ptc404time3);
      

        if($rowz == 7){
        echo'<h1 class="fw-bold text-center" style="color:red;">WEDNESDAY</h1>';
        }else{
          echo'<h1 class="fw-bold text-center" style="color:green;">WEDNESDAY</h1>';
        }

        ?>
        <?php

if ($ptc40415->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}
echo'  ||  ';
if ($ptc40416->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}
echo'  ||  ';
if ($ptc40417->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}
echo'  ||  ';
if ($ptc40418->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}
echo'  ||  ';
if ($ptc40419->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}
echo'  ||  ';
if ($ptc40420->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}
echo'  ||  ';
if ($ptc40421->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}


    ?>
     <div class="table-responsive">
          <table class="table table-bordered bg-light border border-dark border-2">
                      <thead class="table-dark">
                      <tr class="text-center">
                        <th>Subject</th>
                        <th>Section</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Time</th>
                        <th>Day</th>
                        <th>Room</th>
                      </tr>
                    </thead>
                    <tbody>

                    
                                    <?php
                                    while ($line = mysqli_fetch_array($ptc404time3)){ ?>
                                        <tr>
                                            <td class="col text-center"><?php echo strtoupper($line['subcode']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['section']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['tittle']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['status']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['start']); ?> / 
                                                <?php echo strtoupper($line['end']); ?>
                                            </td>
                                            <td class="col text-center"><?php echo strtoupper($line['schedule']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['getbuilding']); ?> <?php echo strtoupper($line['getroom']); ?>
                                            </td>
                                        </tr>
                                      
                                <?php }?>
                                </tbody>

          </table>
                                    </div>
          <?php

        $rowz = mysqli_num_rows($ptc403time4);

        if($rowz == 7){
        echo'<h1 class="fw-bold text-center" style="color:red;">THURSDAY</h1>';
        }else{
          echo'<h1 class="fw-bold text-center" style="color:green;">THURSDAY</h1>';
        }

        ?>
        <?php

if ($ptc40422->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}
echo'  ||  ';
if ($ptc40423->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}
echo'  ||  ';
if ($ptc40424->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}
echo'  ||  ';
if ($ptc40425->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}
echo'  ||  ';
if ($ptc40426->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}
echo'  ||  ';
if ($ptc40427->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}
echo'  ||  ';
if ($ptc40428->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}


    ?>
     <div class="table-responsive">
          <table class="table table-bordered bg-light border border-dark border-2">
                      <thead class="table-dark">
                      <tr class="text-center">
                        <th>Subject</th>
                        <th>Section</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Time</th>
                        <th>Day</th>
                        <th>Room</th>
                      </tr>
                    </thead>
                    <tbody>

                    
                                    <?php
                                    while ($line = mysqli_fetch_array($ptc404time4)){ ?>
                                        <tr>
                                            <td class="col text-center"><?php echo strtoupper($line['subcode']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['section']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['tittle']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['status']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['start']); ?> / 
                                                <?php echo strtoupper($line['end']); ?>
                                            </td>
                                            <td class="col text-center"><?php echo strtoupper($line['schedule']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['getbuilding']); ?> <?php echo strtoupper($line['getroom']); ?>
                                            </td>
                                        </tr>
                                      
                                <?php }?>
                                </tbody>

          </table>
                                    </div>
</div>
        </div>
  </div>
  <hr>
  <h1 class="fw-bold text-center user-select-none" id="sp10" style="cursor: pointer;">PTC 405</h1>
  
  <div class="container text-center" id="t10" style="display:none;">
           <form class="text-center" method="POST">
              <a href = "mapping/map1.php"><input class="btn btn-success my-1 mb-3" type="button" name="create_pdf" value="GENERATE PDF"></a>
            <div class="container-fluid rounded-5">
      
        <div class="container-fluid px-5 rounded-5">
        <?php

        $rowz = mysqli_num_rows($ptc405time1);

        if($rowz == 7){
        echo'<h1 class="fw-bold text-center" style="color:red;">MONDAY</h1>';
        }else{
          echo'<h1 class="fw-bold text-center" style="color:green;">MONDAY</h1>';
        }


        
        ?>
        <?php

      if ($ptc4051->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
      }
      echo'  ||  ';
      if ($ptc4052->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
      }
      echo'  ||  ';
      if ($ptc4053->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
      }
      echo'  ||  ';
      if ($ptc4054->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
      }
      echo'  ||  ';
      if ($ptc4055->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
      }
      echo'  ||  ';
      if ($ptc4056->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
      }
      echo'  ||  ';
      if ($ptc4057->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
      }

      
          ?>
           <div class="table-responsive">
          <table class="table table-bordered bg-light border border-dark border-2">
                      <thead class="table-dark">
                      <tr class="text-center">
                        <th>Subject</th>
                        <th>Section</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Time</th>
                        <th>Day</th>
                        <th>Room</th>
                      </tr>
                    </thead>
                    <tbody>

                    
                                    <?php
                                    while ($line = mysqli_fetch_array($ptc405time1)){ ?>
                                        <tr>
                                            <td class="col text-center"><?php echo strtoupper($line['subcode']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['section']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['tittle']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['status']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['start']); ?> / 
                                                <?php echo strtoupper($line['end']); ?>
                                            </td>
                                            <td class="col text-center"><?php echo strtoupper($line['schedule']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['getbuilding']); ?> <?php echo strtoupper($line['getroom']); ?>
                                            </td>
                                        </tr>
                                      
                                <?php }?>
                                </tbody>

          </table>
                                    </div>
          <?php

        $rowz = mysqli_num_rows($ptc405time2);
     

        if($rowz == 7){
        echo'<h1 class="fw-bold text-center" style="color:red;">TUESDAY</h1>';
        }else{
          echo'<h1 class="fw-bold text-center" style="color:green;">TUESDAY</h1>';
        }

        ?>

<?php

if ($ptc4058->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}
echo'  ||  ';
if ($ptc4059->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}
echo'  ||  ';
if ($ptc40510->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}
echo'  ||  ';
if ($ptc40511->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}
echo'  ||  ';
if ($ptc40512->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}
echo'  ||  ';
if ($ptc40513->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}
echo'  ||  ';
if ($ptc40514->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}


    ?>
     <div class="table-responsive">
          <table class="table table-bordered bg-light border border-dark border-2">
                      <thead class="table-dark">
                      <tr class="text-center">
                        <th>Subject</th>
                        <th>Section</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Time</th>
                        <th>Day</th>
                        <th>Room</th>
                      </tr>
                    </thead>
                    <tbody>

                    
                                    <?php
                                    while ($line = mysqli_fetch_array($ptc405time2)){ ?>
                                        <tr>
                                            <td class="col text-center"><?php echo strtoupper($line['subcode']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['section']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['tittle']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['status']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['start']); ?> / 
                                                <?php echo strtoupper($line['end']); ?>
                                            </td>
                                            <td class="col text-center"><?php echo strtoupper($line['schedule']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['getbuilding']); ?> <?php echo strtoupper($line['getroom']); ?>
                                            </td>
                                        </tr>
                                      
                                <?php }?>
                                </tbody>

          </table>
                                    </div>
          <?php

        $rowz = mysqli_num_rows($ptc405time3);
      

        if($rowz == 7){
        echo'<h1 class="fw-bold text-center" style="color:red;">WEDNESDAY</h1>';
        }else{
          echo'<h1 class="fw-bold text-center" style="color:green;">WEDNESDAY</h1>';
        }

        ?>
        <?php

if ($ptc40515->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}
echo'  ||  ';
if ($ptc40516->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}
echo'  ||  ';
if ($ptc40517->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}
echo'  ||  ';
if ($ptc40518->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}
echo'  ||  ';
if ($ptc40519->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}
echo'  ||  ';
if ($ptc40520->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}
echo'  ||  ';
if ($ptc40521->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}


    ?>
     <div class="table-responsive">
          <table class="table table-bordered bg-light border border-dark border-2">
                      <thead class="table-dark">
                      <tr class="text-center">
                        <th>Subject</th>
                        <th>Section</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Time</th>
                        <th>Day</th>
                        <th>Room</th>
                      </tr>
                    </thead>
                    <tbody>

                    
                                    <?php
                                    while ($line = mysqli_fetch_array($ptc405time3)){ ?>
                                        <tr>
                                            <td class="col text-center"><?php echo strtoupper($line['subcode']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['section']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['tittle']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['status']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['start']); ?> / 
                                                <?php echo strtoupper($line['end']); ?>
                                            </td>
                                            <td class="col text-center"><?php echo strtoupper($line['schedule']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['getbuilding']); ?> <?php echo strtoupper($line['getroom']); ?>
                                            </td>
                                        </tr>
                                      
                                <?php }?>
                                </tbody>

          </table>
                                    </div>
          <?php

        $rowz = mysqli_num_rows($ptc405time4);

        if($rowz == 7){
        echo'<h1 class="fw-bold text-center" style="color:red;">THURSDAY</h1>';
        }else{
          echo'<h1 class="fw-bold text-center" style="color:green;">THURSDAY</h1>';
        }

        ?>
        <?php

if ($ptc40522->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}
echo'  ||  ';
if ($ptc40523->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}
echo'  ||  ';
if ($ptc40524->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}
echo'  ||  ';
if ($ptc40425->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}
echo'  ||  ';
if ($ptc40526->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}
echo'  ||  ';
if ($ptc40527->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}
echo'  ||  ';
if ($ptc40528->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}


    ?>
     <div class="table-responsive">
          <table class="table table-bordered bg-light border border-dark border-2">
                      <thead class="table-dark">
                      <tr class="text-center">
                        <th>Subject</th>
                        <th>Section</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Time</th>
                        <th>Day</th>
                        <th>Room</th>
                      </tr>
                    </thead>
                    <tbody>

                    
                                    <?php
                                    while ($line = mysqli_fetch_array($ptc405time4)){ ?>
                                        <tr>
                                            <td class="col text-center"><?php echo strtoupper($line['subcode']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['section']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['tittle']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['status']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['start']); ?> / 
                                                <?php echo strtoupper($line['end']); ?>
                                            </td>
                                            <td class="col text-center"><?php echo strtoupper($line['schedule']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['getbuilding']); ?> <?php echo strtoupper($line['getroom']); ?>
                                            </td>
                                        </tr>
                                      
                                <?php }?>
                                </tbody>

          </table>
                                    </div>
</div>
        </div>
  </div>
  <hr>
  <h1 class="fw-bold text-center user-select-none" id="sp11" style="cursor: pointer;">PTC 406</h1>
  
  <div class="container text-center" id="t11" style="display:none;">
           <form class="text-center" method="POST">
              <a href = "mapping/map1.php"><input class="btn btn-success my-1 mb-3" type="button" name="create_pdf" value="GENERATE PDF"></a>
            <div class="container-fluid rounded-5">
      
        <div class="container-fluid px-5 rounded-5">
        <?php

        $rowz = mysqli_num_rows($ptc406time1);

        if($rowz == 7){
        echo'<h1 class="fw-bold text-center" style="color:red;">MONDAY</h1>';
        }else{
          echo'<h1 class="fw-bold text-center" style="color:green;">MONDAY</h1>';
        }


        
        ?>
        <?php

      if ($ptc4061->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
      }
      echo'  ||  ';
      if ($ptc4062->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
      }
      echo'  ||  ';
      if ($ptc4063->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
      }
      echo'  ||  ';
      if ($ptc4064->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
      }
      echo'  ||  ';
      if ($ptc4065->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
      }
      echo'  ||  ';
      if ($ptc4066->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
      }
      echo'  ||  ';
      if ($ptc4067->num_rows==1){
        echo '<p style="color:red; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
      }else{
        echo '<p style="color:green; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
      }

      
          ?>
           <div class="table-responsive">
          <table class="table table-bordered bg-light border border-dark border-2">
                      <thead class="table-dark">
                      <tr class="text-center">
                        <th>Subject</th>
                        <th>Section</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Time</th>
                        <th>Day</th>
                        <th>Room</th>
                      </tr>
                    </thead>
                    <tbody>

                    
                                    <?php
                                    while ($line = mysqli_fetch_array($ptc406time1)){ ?>
                                        <tr>
                                            <td class="col text-center"><?php echo strtoupper($line['subcode']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['section']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['tittle']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['status']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['start']); ?> / 
                                                <?php echo strtoupper($line['end']); ?>
                                            </td>
                                            <td class="col text-center"><?php echo strtoupper($line['schedule']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['getbuilding']); ?> <?php echo strtoupper($line['getroom']); ?>
                                            </td>
                                        </tr>
                                      
                                <?php }?>
                                </tbody>

          </table>
                                    </div>
          <?php

        $rowz = mysqli_num_rows($ptc406time2);
     

        if($rowz == 7){
        echo'<h1 class="fw-bold text-center" style="color:red;">TUESDAY</h1>';
        }else{
          echo'<h1 class="fw-bold text-center" style="color:green;">TUESDAY</h1>';
        }

        ?>

<?php

if ($ptc4068->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}
echo'  ||  ';
if ($ptc4069->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}
echo'  ||  ';
if ($ptc40610->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}
echo'  ||  ';
if ($ptc40611->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}
echo'  ||  ';
if ($ptc40612->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}
echo'  ||  ';
if ($ptc40613->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}
echo'  ||  ';
if ($ptc40614->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}


    ?>
     <div class="table-responsive">
          <table class="table table-bordered bg-light border border-dark border-2">
                      <thead class="table-dark">
                      <tr class="text-center">
                        <th>Subject</th>
                        <th>Section</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Time</th>
                        <th>Day</th>
                        <th>Room</th>
                      </tr>
                    </thead>
                    <tbody>

                    
                                    <?php
                                    while ($line = mysqli_fetch_array($ptc406time2)){ ?>
                                        <tr>
                                            <td class="col text-center"><?php echo strtoupper($line['subcode']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['section']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['tittle']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['status']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['start']); ?> / 
                                                <?php echo strtoupper($line['end']); ?>
                                            </td>
                                            <td class="col text-center"><?php echo strtoupper($line['schedule']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['getbuilding']); ?> <?php echo strtoupper($line['getroom']); ?>
                                            </td>
                                        </tr>
                                      
                                <?php }?>
                                </tbody>

          </table>
                                    </div>
          <?php

        $rowz = mysqli_num_rows($ptc406time3);
      

        if($rowz == 7){
        echo'<h1 class="fw-bold text-center" style="color:red;">WEDNESDAY</h1>';
        }else{
          echo'<h1 class="fw-bold text-center" style="color:green;">WEDNESDAY</h1>';
        }

        ?>
        <?php

if ($ptc40615->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}
echo'  ||  ';
if ($ptc40616->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}
echo'  ||  ';
if ($ptc40617->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}
echo'  ||  ';
if ($ptc40618->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}
echo'  ||  ';
if ($ptc40619->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}
echo'  ||  ';
if ($ptc40620->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}
echo'  ||  ';
if ($ptc40621->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}


    ?>
     <div class="table-responsive">
          <table class="table table-bordered bg-light border border-dark border-2">
                      <thead class="table-dark">
                      <tr class="text-center">
                        <th>Subject</th>
                        <th>Section</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Time</th>
                        <th>Day</th>
                        <th>Room</th>
                      </tr>
                    </thead>
                    <tbody>

                    
                                    <?php
                                    while ($line = mysqli_fetch_array($ptc406time3)){ ?>
                                        <tr>
                                            <td class="col text-center"><?php echo strtoupper($line['subcode']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['section']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['tittle']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['status']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['start']); ?> / 
                                                <?php echo strtoupper($line['end']); ?>
                                            </td>
                                            <td class="col text-center"><?php echo strtoupper($line['schedule']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['getbuilding']); ?> <?php echo strtoupper($line['getroom']); ?>
                                            </td>
                                        </tr>
                                      
                                <?php }?>
                                </tbody>

          </table>
                                    </div>
          <?php

        $rowz = mysqli_num_rows($ptc405time4);

        if($rowz == 7){
        echo'<h1 class="fw-bold text-center" style="color:red;">THURSDAY</h1>';
        }else{
          echo'<h1 class="fw-bold text-center" style="color:green;">THURSDAY</h1>';
        }

        ?>
        <?php

if ($ptc40622->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">7:30AM-9:00AM</p>';
}
echo'  ||  ';
if ($ptc40623->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">9:00AM-10:30AM</p>';
}
echo'  ||  ';
if ($ptc40624->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">10:30AM-12:00PM</p>';
}
echo'  ||  ';
if ($ptc40625->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">12:00PM-1:30PM</p>';
}
echo'  ||  ';
if ($ptc40626->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">1:30PM-3:00PM</p>';
}
echo'  ||  ';
if ($ptc40627->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">3:00PM-4:30PM</p>';
}
echo'  ||  ';
if ($ptc40628->num_rows==1){
  echo '<p style="color:red; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}else{
  echo '<p style="color:green; display:inline; font-weight:bold;">4:30PM-6:00PM</p>';
}


    ?>
     <div class="table-responsive">
          <table class="table table-bordered bg-light border border-dark border-2">
                      <thead class="table-dark">
                      <tr class="text-center">
                        <th>Subject</th>
                        <th>Section</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Time</th>
                        <th>Day</th>
                        <th>Room</th>
                      </tr>
                    </thead>
                    <tbody>

                    
                                    <?php
                                    while ($line = mysqli_fetch_array($ptc406time4)){ ?>
                                        <tr>
                                            <td class="col text-center"><?php echo strtoupper($line['subcode']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['section']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['tittle']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['status']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['start']); ?> / 
                                                <?php echo strtoupper($line['end']); ?>
                                            </td>
                                            <td class="col text-center"><?php echo strtoupper($line['schedule']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['getbuilding']); ?> <?php echo strtoupper($line['getroom']); ?>
                                            </td>
                                        </tr>
                                      
                                <?php }?>
                                </tbody>

          </table>
                                    </div>
</div>
        </div>
  </div>
  <br>
  </div>
  <script>
    document.getElementById('sp1').addEventListener("click",function(){
    showTable1('t1');
});

document.getElementById('sp2').addEventListener("click",function(){
    showTable2('t2');
});

document.getElementById('sp3').addEventListener("click",function(){
    showTable3('t3');
});

document.getElementById('sp4').addEventListener("click",function(){
    showTable4('t4');
});

document.getElementById('sp5').addEventListener("click",function(){
    showTable5('t5');
});

document.getElementById('sp6').addEventListener("click",function(){
    showTable6('t6');
});

document.getElementById('sp7').addEventListener("click",function(){
    showTable7('t7');
});

document.getElementById('sp8').addEventListener("click",function(){
    showTable8('t8');
});

document.getElementById('sp9').addEventListener("click",function(){
    showTable9('t9');
});

document.getElementById('sp10').addEventListener("click",function(){
    showTable10('t10');
});

document.getElementById('sp11').addEventListener("click",function(){
    showTable11('t11');
});

document.getElementById('sp12').addEventListener("click",function(){
    showTable12('t12');
});

function showTable1(table){
    var elem=document.getElementById("t1");
         var hide = elem.style.display =="none";
         if (hide) {
             elem.style.display="block";
        } 
        else {
           elem.style.display="none";
        }
}

function showTable2(table){
    var elem=document.getElementById("t2");
         var hide = elem.style.display =="none";
         if (hide) {
             elem.style.display="block";
        } 
        else {
           elem.style.display="none";
        }
}

function showTable3(table){
    var elem=document.getElementById("t3");
         var hide = elem.style.display =="none";
         if (hide) {
             elem.style.display="block";
        } 
        else {
           elem.style.display="none";
        }
}

function showTable4(table){
    var elem=document.getElementById("t4");
         var hide = elem.style.display =="none";
         if (hide) {
             elem.style.display="block";
        } 
        else {
           elem.style.display="none";
        }
}
function showTable5(table){
    var elem=document.getElementById("t5");
         var hide = elem.style.display =="none";
         if (hide) {
             elem.style.display="block";
        } 
        else {
           elem.style.display="none";
        }
}

function showTable6(table){
    var elem=document.getElementById("t6");
         var hide = elem.style.display =="none";
         if (hide) {
             elem.style.display="block";
        } 
        else {
           elem.style.display="none";
        }
}
function showTable7(table){
    var elem=document.getElementById("t7");
         var hide = elem.style.display =="none";
         if (hide) {
             elem.style.display="block";
        } 
        else {
           elem.style.display="none";
        }
}

function showTable8(table){
    var elem=document.getElementById("t8");
         var hide = elem.style.display =="none";
         if (hide) {
             elem.style.display="block";
        } 
        else {
           elem.style.display="none";
        }
}
function showTable9(table){
    var elem=document.getElementById("t9");
         var hide = elem.style.display =="none";
         if (hide) {
             elem.style.display="block";
        } 
        else {
           elem.style.display="none";
        }
}

function showTable10(table){
    var elem=document.getElementById("t10");
         var hide = elem.style.display =="none";
         if (hide) {
             elem.style.display="block";
        } 
        else {
           elem.style.display="none";
        }
}
function showTable11(table){
    var elem=document.getElementById("t11");
         var hide = elem.style.display =="none";
         if (hide) {
             elem.style.display="block";
        } 
        else {
           elem.style.display="none";
        }
}

function showTable12(table){
    var elem=document.getElementById("t12");
         var hide = elem.style.display =="none";
         if (hide) {
             elem.style.display="block";
        } 
        else {
           elem.style.display="none";
        }
}

</script>
                                    <br>
                                          <footer class="footer mt-auto py-1 bg-light bg-gradient border-top border-2 border-dark">
<div class="container py-2">
          <p class="text-center success my-auto">&copy; 2022 All Rights Reserved</p>
      </div>
  </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>

</html>