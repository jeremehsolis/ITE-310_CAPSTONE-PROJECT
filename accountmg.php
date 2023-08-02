<?php 

include('code1.php');

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Account Management</title>
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
<div class="container mx-auto my-auto bg-light text-dark bg-gradient rounded-5 border border-3 border-dark">
  <div class=" py-3 mx-auto my-auto text-center">
  <h1 class="text-center fw-bold" style="color: goldenrod;">ACCOUNT MANAGEMENT</h1>
  <button class="btn btn-success text-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
   Add Account
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="accountadd.php">Single</a></li>
    <li><a class="dropdown-item" id="sp2">Upload File</a></li>
  </ul>
  <div class="container my-auto mx-auto text-center px-5" id="t2" style="display: none;">
<br>

<form method="POST" action="code1.php" enctype="multipart/form-data">
<div class="form-group container text-center col-auto">
	<input type="file" name="import_file" class="form-control border border-dark border-1" enctype="multipart/form-data" required>
</div>
<div class="form-group py-3">
	<button type="submit" name="save_excel_data" class="btn btn-success">Upload</button>
</div> 
</div>
<div class="container text-center bg-light rounded-5 text-dark my-5">
<?php

if(isset($_SESSION['message'])){
    echo "<h2 style=color: red;>".$_SESSION['message']."</h2>";
    unset($_SESSION['message']);
}

?>
</div>
</div>  
      <div class="mx-auto py-5 px-5 mx-auto my-auto text-dark bg-gradient rounded-5">
      <div class="table-responsive">
      <table class="table">
  <thead>
    <tr>
      <th class=" fs-3 text-center" scope="col">USERTYPE</th>
      <th class=" fs-3 text-center" scope="col">EMPLOYEE ID</th>
      <th class=" fs-3 text-center" scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
  <tr>
                                    <td class="col text-center fw-bold" style="color: black"><p>ADMIN</p></td>
                                    <td class="col text-center fw-bold" style="color: black"><p>03-1718-01473</p></td>
                                    <td class="col text-center fw-bold" style="color: black"></td>
                                    </tr>
     <?php
     include('dbaccountmg.php');
     include('connect.php');
     $results = mysqli_query($con, "SELECT * FROM `login`"); 
           
     while($row = mysqli_fetch_array($results)){     
         

                                    while ($line = mysqli_fetch_array($RESULT)){ ?>
                                    
                                        <tr>
                                    
                                            <td class="col text-center " style="color: black"><?php echo strtoupper($line['usertype']); ?></td>
                                            <td class="col text-center " style="color: black"><?php echo strtoupper($line['username']); ?></td>
                                            <td class="text-center"><button class="btn btn-success mx-1" type="submit">
                                              <a class="text-light" href="update.php?id=<?php echo $line['user_id']; ?>" style="color:#000; text-decoration:none;">Edit</a></button>
                                              <input class="btn btn-danger mx-1" type="button" onclick="deleteme(<?php echo $line['user_id']; ?>)" name="Delete" value="Delete">
                                            </td>
                                        
                                        </tr>
                                        <script language="javascript">
                                            function deleteme(delid){
                                                if (confirm("Are you sure you want to delete this record?")) {
                                                    window.location.href='dbaccountmg.php?delete=' +delid+'';
                                                    return true;
                                                }
                                            }
                                        </script>
                                <?php }}?>
  </tbody>
  </table>
                                          </div>
                                          </div>
 
  <h1 class="text-center fw-bold" style="color: goldenrod;">ACTIVITY LOG</h1>
  <div class="mx-auto py-5 px-5 mx-auto my-auto text-dark bg-gradient rounded-5">
      <div class="table-responsive">
<table class="table table-bordered bg-light border border-dark border-2">
  <thead class="table-dark">
  <tr class="text-center">
     
      <th >EMPLOYEE ID</th>
      <th >LOGIN TIME</th>
      <th >LOGOUT TIME</th>
    </tr>
  </thead>
  <tbody>

  <?php

    include('connect.php');



     $time = mysqli_query($con, "SELECT * FROM `activity`"); 
     $timer = mysqli_query($con, "SELECT * FROM `activityout`"); 
   
     
     
     while ($line = mysqli_fetch_array($time) and $line1 = mysqli_fetch_array($timer)){ ?>
                                    
      <tr>
          <td class="col text-center " style="color: black"><?php echo strtoupper($line['employee_id']); ?></td>
          <td class="col text-center " style="color: black"><?php echo strtoupper(date(" Y-m-d g:i:s a", strtotime($line['timein']))); ?></td>
          <td class="col text-center " style="color: black"><?php echo strtoupper(date(" Y-m-d g:i:s a", strtotime($line1['timeout']))); ?></td>
     </tr>
  <?php }?>
</tbody>
  </table>
                                        
                                          </div>
                                          </div>

                                          <h1 class="text-center fw-bold" style="color: goldenrod;">STAFF ADDED LOG</h1>
  <div class="mx-auto py-5 px-5 mx-auto my-auto text-dark bg-gradient rounded-5">
      <div class="table-responsive">
      <table class="table table-bordered bg-light border border-dark border-2">
  <thead class="table-dark">
  <tr class="text-center">
            <th>Username</th>
         <th>Subject</th>
                        <th>Section</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Time</th>
                        <th>Day</th>
                        <th>Room</th>
                        <th>Time Added</th>
     
    </tr>
  </thead>
  <tbody>

  <?php

    include('connect.php');
   

    
     $time = mysqli_query($con, "SELECT * FROM `activity`"); 
     $timer = mysqli_query($con, "SELECT * FROM `addoutput`"); 
   
     
     
     while ( $line1 = mysqli_fetch_array($timer)){ ?>
                                    
      <tr>                                  
                                            <td class="col text-center"><?php echo strtoupper($line1['add_userlogged']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line1['add_subcode']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line1['add_section']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line1['add_tittle']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line1['add_status']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line1['add_start']); ?> / 
                                                <?php echo strtoupper($line1['add_end']); ?>
                                            </td>
                                            <td class="col text-center"><?php echo strtoupper($line1['add_schedule']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line1['add_getbuilding']); ?> <?php echo strtoupper($line1['add_getroom']); ?>
                                            </td>
                                            <td class="col text-center"><?php echo strtoupper($line1['add_timesave']); ?></td>
                                        </tr>
  <?php }?>

 

 
</tbody>
</table>

                                          </div>





                                         

                                           </div>


                                          <h1 class="text-center fw-bold" style="color: goldenrod;">STAFF EDITED LOG</h1>
  <div class="mx-auto py-5 px-5 mx-auto my-auto text-dark bg-gradient rounded-5">
      <div class="table-responsive">
 <table class="table table-bordered bg-light border border-dark border-2">
  <thead class="table-dark">
  <tr class="text-center">
     
         <th>Username</th>
         <th>Subject</th>
                        <th>Section</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Time</th>
                        <th>Day</th>
                        <th>Room</th>
                        <th>Time Edited</th>
     
    </tr>
  </thead>
  <tbody>

  <?php

    include('connect.php');
   

    
     $time = mysqli_query($con, "SELECT * FROM `activity`"); 
     $timer = mysqli_query($con, "SELECT * FROM `updateoutput`"); 
   
     
     
     while ( $line1 = mysqli_fetch_array($timer)){ ?>
        <tr>                            
     <td class="col text-center"><?php echo strtoupper($line1['update_userlogged']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line1['update_subcode']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line1['update_section']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line1['update_tittle']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line1['update_status']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line1['update_start']); ?> / 
                                                <?php echo strtoupper($line1['update_end']); ?>
                                            </td>
                                            <td class="col text-center"><?php echo strtoupper($line1['update_schedule']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line1['update_getbuilding']); ?> <?php echo strtoupper($line1['update_getroom']); ?>
                                            </td>
                                            <td class="col text-center"><?php echo strtoupper($line1['update_timesave']); ?></td>
                                        </tr>
  <?php }?>

 

 
</tbody>
  </table>

                                          </div>





                                          </div> 


                                           <h1 class="text-center fw-bold" style="color: goldenrod;">STAFF DELETED LOG</h1>
  <div class="mx-auto py-5 px-5 mx-auto my-auto text-dark bg-gradient rounded-5">
      <div class="table-responsive">
 <table class="table table-bordered bg-light border border-dark border-2">
  <thead class="table-dark">
  <tr class="text-center">
     
         <th>Username</th>
         <th>Subject</th>
                        <th>Section</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Time</th>
                        <th>Day</th>
                        <th>Room</th>
                        <th>Time Deleted</th>
     
    </tr>
  </thead>
  <tbody>

  <?php

    include('connect.php');
   

    
     $time = mysqli_query($con, "SELECT * FROM `activity`"); 
     $timer = mysqli_query($con, "SELECT * FROM `deletedoutput`"); 
   
     
     
     while ( $line1 = mysqli_fetch_array($timer)){ ?>
                                    
     <tr>                            
     <td class="col text-center"><?php echo strtoupper($line1['deleted_userlogged']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line1['deleted_subcode']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line1['deleted_section']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line1['deleted_tittle']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line1['deleted_status']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line1['deleted_start']); ?> / 
                                                <?php echo strtoupper($line1['deleted_end']); ?>
                                            </td>
                                            <td class="col text-center"><?php echo strtoupper($line1['deleted_schedule']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line1['deleted_getbuilding']); ?> <?php echo strtoupper($line1['deleted_getroom']); ?>
                                            </td>
                                            <td class="col text-center"><?php echo strtoupper($line1['deleted_timesave']); ?></td>
                                        </tr>
  <?php }?>

 

 
</tbody>
  </table>
   </div>
                                          </div>

                                         <h1 class="text-center fw-bold" style="color: goldenrod;">STAFF UPLOADED LOG</h1>
  <div class="mx-auto py-5 px-5 mx-auto my-auto text-dark bg-gradient rounded-5">
      <div class="table-responsive">
 <table class="table table-bordered bg-light border border-dark border-2">
  <thead class="table-dark">
  <tr class="text-center">
     
         <th>Username</th>
         <th>Subject</th>
                        <th>Section</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Time</th>
                        <th>Day</th>
                        <th>Room</th>
                        <th>Time Uploaded</th>
     
    </tr>
  </thead>
  <tbody>

  <?php

    include('connect.php');
   

    
     $time = mysqli_query($con, "SELECT * FROM `activity`"); 
     $timer = mysqli_query($con, "SELECT * FROM `uploadoutput`"); 
   
     
     
     while ( $line1 = mysqli_fetch_array($timer)){ ?>
                                    
      <tr>
       <td class="col text-center"><?php echo strtoupper($line1['upload_userlogged']); ?></td>
          <td class="col text-center"><?php echo strtoupper($line1['upload_subcode']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line1['upload_section']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line1['upload_tittle']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line1['upload_status']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line1['upload_start']); ?> / 
                                                <?php echo strtoupper($line1['upload_end']); ?>
                                            </td>
                                            <td class="col text-center"><?php echo strtoupper($line1['upload_schedule']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line1['upload_getbuilding']); ?> <?php echo strtoupper($line1['upload_getroom']); ?>
                                            </td>
                                            <td class="col text-center"><?php echo strtoupper($line1['upload_timesave']); ?></td>
          
     </tr>
  <?php }?>

 

 
</tbody>
  </table>

                                          </div>
                                          
                           
                                          <br>
  <br>
</div>
</div></div>
<script>

document.getElementById('sp2').addEventListener("click",function(){
    showTable1('t2');
});

function showTable1(table){
    var elem=document.getElementById("t2");
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