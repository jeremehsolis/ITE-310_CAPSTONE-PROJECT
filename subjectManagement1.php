<?php

session_start();

include('dbsubject.php');


    if (isset($_GET['edit'])){
        $id = $_GET['edit'];
        $edit_state = true;
        $rec = mysqli_query($db, "SELECT * FROM db_sub WHERE id=$id");
        $record = mysqli_fetch_array($rec);
        $subcode = $record['subcode'];
        $section = $record['section'];
        $tittle = $record['tittle'];
        $starttime = $record['start'];
        $endtime = $record['end'];
        $schedule = $record['schedule'];
        $status = $record['status'];
        $getbuilding = $record['getbuilding'];
        $getroom = $record['getroom'];
        $id = $record['id'];
    }
  
    ?>
    

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Schedule Management</title>
    <link rel="stylesheet" href="style.css">
    
    <style>
    .row1 {
             background: white;
             border-radius: 25px;
             box-shadow: 10px 10px 20px gray;
             }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="http://localhost/new/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/css/responsive.dataTables.min.css"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>

  </head>
  <body class="d-flex flex-column min-vh-100" style="background-image: url('bg.jpg'); background-size: cover; background-repeat: no repeat;">
  <div class="container-fluid bg-light bg-gradient border-bottom border-3 border-dark">
  <header class="d-flex flex-wrap justify-content-center py-3 no-gutters my-auto mx-auto">
        <div href="dashboard1.html" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none mx-auto">
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
    </div>
<br>

<div class="container-fluid">
<div class="container bg-light rounded-5 border border-dark border-2">
<h1 class="text-center fw-bold" style="color: goldenrod;">SCHEDULE MANAGEMENT</h1>
</div>
<div class="container text-center my-1">
<button class="btn btn-light text-center text-dark fw-bold mx-1 border border-dark border-2" id="sp1" value="ignore">Show/Hide Menu</button>
<button class="btn btn-light text-center text-dark fw-bold border border-dark border-2" id="sp2" value="ignore">Upload File</button>
            </div>
<form method="POST" action="">
  
      <div class="container py-2"  id="t1" style="display: block;">
          <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="row bg-light bg-gradient text-dark px-2 border border-dark border-2 p-4">
          <p><span class="error mx-4 px-2" style="color: #FF0000;">* REQUIRED FIELD</span></p>
          <div class="col-auto mx-auto">
            
          <h6 class="fw-bold my-2">Subject Code:<span class="error" style="color: #FF0000">*</span></h6>
          <input class="form-control form-control-sm border border-dark border-1" type="textbox" name="subcode" value="<?php echo $subcode; ?>" required="required" pattern="\S(.*\S)?" maxlength="20">
          
          <h6 class="fw-bold my-2">Section:<span class="error" style="color: #FF0000">*</span></h6>
          <input class="form-control form-control-sm border border-dark border-1" type="textbox" name="section" value="<?php echo $section; ?>" required="required" pattern="\S(.*\S)?" maxlength="20">
          
          </div>
          <div class="col-auto mx-auto">
          <h6 class="fw-bold my-2">Descriptive Title:<span class="error" style="color: #FF0000">*</span></h6>
          <input class="form-control form-control-sm border border-dark border-1" type="textbox" name="tittle" value="<?php echo $tittle; ?>" required="required" pattern="\S(.*\S)?" maxlength="50">
          <td>
                <h6 class="fw-bold my-2">Department:<span class="error" style="color: #FF0000">*</span></h6>
                    <select class="form-control form-control-sm border border-dark border-1" 
                    id="getbuilding" name="getbuilding" 
                      required>
            <option value disabled selected>Select Department</option>
            <option id="cite" name='cite' value="cite"  onclick="processdpt()"
                         <?php
                            if ($getbuilding == 'cite') {
                            echo "selected";
                            }?>>CITE</option>
            <option name='cea' value="cea"
                         <?php
                            if ($getbuilding == 'cea') {
                            echo "selected";
                            }?>>CEA</option>
            <option name='cas' value="cas"
                         <?php
                            if ($getbuilding == 'cas') {
                            echo "selected";
                            }?>>CAS</option>
                             <option name='chs' value="chs"
                         <?php
                            if ($getbuilding == 'chs') {
                            echo "selected";
                            }?>>CHS</option>
                             <option name='cma' value="cma"
                         <?php
                            if ($getbuilding == 'cma') {
                            echo "selected";
                            }?>>CMA</option>
         </select>
         
                </td>
          
          </div>
          <div class="col-auto mx-auto">
          <h6 class="fw-bold my-2">Face-to-Face Class Time:<span class="error" style="color: #FF0000">*</span></h6>
      
                           <select class="form-control form-control-sm border border-dark border-1" id="start" name="start" required value="<?php echo $starttime; ?>">
                              <option value disabled selected hidden>Select Time</option>
                              <option value disabled class="fw-bold text-dark">1 Hour 30 Minutes Gap</option>
                              <option value="07:30AM-09:00AM">7:30 AM - 9:00 AM</option>
                              <option value="09:00AM-10:30AM">9:00 AM - 10:30 AM</option>
                              <option value="10:30AM-12:00PM">10:30 AM - 12:00 PM</option>
                              <option value="12:00PM-01:30PM">12:00 PM - 1:30 PM</option>
                              <option value="01:30PM-03:00PM">1:30 PM - 3:00 PM</option>
                              <option value="03:00PM-04:30PM">3:00 PM - 4:30 PM</option>
                              <option value="04:30PM-06:00PM">4:30 PM - 6:00 PM</option>
                              <option value disabled class="fw-bold text-dark">1 Hour Gap</option>
                              <option value="07:00AM-08:00AM">7:00 AM - 8:00 AM</option>
                              <option value="08:00AM-09:00AM">8:00 AM - 9:00 AM</option>
                              <option value="09:00AM-10:00AM">9:00 AM - 10:00 AM</option>
                              <option value="10:00AM-11:00AM">10:00 AM - 11:00 AM</option>
                              <option value="11:00AM-12:00PM">11:00 AM - 12:00 PM</option>
                              <option value="12:00PM-01:00PM">12:00 PM - 1:00 PM</option>
                              <option value="01:00PM-02:00PM">1:00 PM - 2:00 PM</option>
                              <option value="02:00PM-03:00PM">2:00 PM - 3:00 PM</option>
                              <option value="03:00PM-04:00PM">3:00 PM - 4:00 PM</option>
                              <option value="04:00PM-05:00PM">4:00 PM - 5:00 PM</option>
                              <option value="05:00PM-06:00PM">5:00 PM - 6:00 PM</option>
                          </select>
                          

           <h6 class="fw-bold my-2">Remote Class Time:<span class="error" style="color: #FF0000">*</span></h6>
      
                           <select class="form-control form-control-sm border border-dark border-1" id="end" name="end" required value="<?php echo $endtime; ?>">
                              <option value disabled selected hidden>Select Time</option>
                              <option value="07:00AM-08:00AM">7:00 AM - 8:00 AM</option>
                              <option value="08:00AM-09:00AM">8:00 AM - 9:00 AM</option>
                              <option value="09:00AM-10:00AM">9:00 AM - 10:00 AM</option>
                              <option value="10:00AM-11:00AM">10:00 AM - 11:00 AM</option>
                              <option value="11:00AM-12:00PM">11:00 AM - 12:00 PM</option>
                              <option value="12:00PM-01:00PM">12:00 PM - 1:00 PM</option>
                              <option value="01:00PM-02:00PM">1:00 PM - 2:00 PM</option>
                              <option value="02:00PM-03:00PM">2:00 PM - 3:00 PM</option>
                              <option value="03:00PM-04:00PM">3:00 PM - 4:00 PM</option>
                              <option value="04:00PM-05:00PM">4:00 PM - 5:00 PM</option>
                              <option value="05:00PM-06:00PM">5:00 PM - 6:00 PM</option>
                          </select>
                          
          </div>    
      
          <div class="col-auto mx-auto">              
          <h6 class="fw-bold my-2">Day:<span class="error" style="color: #FF0000">*</span></h6>
          <select class="form-control form-control-sm border border-dark border-1" id="schedule" name="schedule" required>
            <option value disabled selected hidden>Select Day</option>
            <option name='Mon' value="Mon/Wed"
                         <?php
                            if ($schedule == 'Mon/Wed') {
                            echo "selected";
                            }?>>Monday/Wednesday</option>
            <option name='Tue' value="Tue/Thu"
                         <?php
                            if ($schedule == 'Tue/Thu') {
                            echo "selected";
                            }?>>Tuesday/Thursday</option>
            <option name='Wed' value="Wed/Fri"
                         <?php
                            if ($schedule == 'Wed/Fri') {
                            echo "selected";
                            }?>>Wednesday/Friday</option>
            <option name='Thu' value="Thu/Sat"
                         <?php
                            if ($schedule == 'Thu/Sat') {
                            echo "selected";
                            }?>>Thursday/Saturday</option>
         </select>
         <h6 class="fw-bold my-2">Status:<span class="error" style="color: #FF0000">*</span></h6>
                <td><input class="bt" type="radio" name="status" id="laboratory" value="Laboratory" onchange="processdpt(this.id,'laboratory')"  required  
                    <?php
                    if ($status == "Laboratory") {
                        echo "checked";
                    }
                    ?> 
                    ><span style="font-weight:bold; margin-right:9px;margin-left:5px;">Laboratory</span>

                <input class="bt" type="radio" name="status" id="lecture" value="Lecture" onchange="processdpt(this.id,'lecture')"  required 
                <?php
                    if ($status == "Lecture") {
                        echo "checked";
                    }
                    ?> 
                ><span style="font-weight:bold; margin-right:9px;margin-left:5px;">Lecture</span>
                
               
                </div>
                
                <div class="col-auto mx-auto">
                
                <h6 class="fw-bold my-2">Room:<span class="error" style="color: #FF0000">*</span></h6>
                <td>
                      <select class="form-control form-control-sm border border-dark border-1" id="getroom" name="getroom" required  style="text-transform: uppercase;">
                            <option value="<?php echo $getroom; ?>"
                                <?php while ( $fetch_room=mysqli_fetch_array($get_room) ) {
                                  if ($getroom==$fetch_room) {
                                    echo $getroom;
                                  }?> selected> <?php echo $getroom;?> </option>
                                <?php } ?>
                                
                      </select>
                      <div class="text-center my-3">
          <?php if ($edit_state == true): ?>
            <button class="btn btn-success my-2" type="submit" name="updatesub" >Update</button>
            <a href="subjectManagement.php"><button class="btn btn-danger" type="button" value="ignore">Cancel</button></a>
         
            <?php else: ?>
                <button class="btn btn-success my-2" type="submit" name="submitsub" id="sp1">Add</button>
                <button class="btn btn-success" type="reset" onclick="reset()">Reset</button>
                
            <?php endif ?></div>
            <?php
                        if (isset($_GET['error'])) { ?>
                            <p class="error text-center" style="color: red;"><?php echo $_GET["error"]; 
                            unset($_GET['error']);?></p>
                         
                        <?php }?>
                        
            </div>
                </td>
              <br>
              
          </div>
        
            
                </td>
          
                
                </td>
                
                </td>
                 
                </div>
               
</form>
      </div>
        </div>

        <div class="container bg-light bg-gradient my-auto mx-auto text-center rounded-5 px-5 border border-dark border-2" id="t2" style="display: none;">
<h1 class="fw-bold" style="color: goldenrod;">UPLOAD EXCEL FILE</h1>
<br>

<form method="POST" action="code.php" enctype="multipart/form-data">
<div class="form-group container text-center col-auto">
	<input type="file" name="import_file" class="form-control border border-dark border-1" enctype="multipart/form-data" required>
</div>
<div class="form-group py-3">
	<button type="submit" name="save_excel_data" class="btn btn-success">Upload</button>
</div> 
</div>
<div class="container text-center bg-light rounded-5 text-dark">
<?php

if(isset($_SESSION['message'])){
    echo "<h2 style=color: red;>".$_SESSION['message']."</h2>";
    unset($_SESSION['message']);
}

?>
</div>
        <div class="container-fluid px-3 py-1">
        <div class="container-fluid bg-light rounded-5 px-5 py-2 border border-dark border-2">
            <h1 class="text-center fw-bold" style="color: goldenrod;">CITE DEPARTMENT</h1>
        <div class="table-responsive">
          <table class="table table-bordered bg-light border border-dark border-2 " id="table100">
                      <thead class="table-dark">
                      <tr class="text-center">
                        <th>Subject</th>
                        <th>Section</th>
                        <th>Descriptive Title</th>
                        <th>Status</th>
                        <th>F2F Class/Remote Class Time</th>
                        <th>Day</th>
                        <th>Room</th>
                        <th>School Year</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>

                    
                                    <?php
                                    while ($line = mysqli_fetch_array($RESULT)){ ?>
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
                                            <td class="col text-center">2022-2023</td>
                                            <td class="text-center"><button class="btn btn-success mx-1" type="submit">
                                              <a class="text-light" href="subjectManagement.php?edit=<?php echo $line['id']; ?>" 
                                              style="color:#000; text-decoration:none;">Edit</a>
                                            </button><input class="btn btn-danger mx-1" type="button" 
                                            onclick="deleteme(<?php echo $line['id']; ?>)" name="Delete" value="Delete"></td>
                                        </tr>
                                        <script language="javascript">



                                            function deleteme(delid){
                                                if (confirm("Are you sure you want to delete this record?")) {
                                                    window.location.href='dbsubject.php?delete=' +delid+'';
                                                    return true;
                                                }
                                            }
                                        </script>
                                <?php }?>
                                </tbody>

          </table>
                                          </div>
                                        </div>
                                        </div>
                                      
<script>

$(document).ready(function(){
  $('#table100').DataTable();
  scrollX: true
  responsive: true
});
</script>
<script>

    document.getElementById('sp1').addEventListener("click",function(){
    showTable('t1');
});

document.getElementById('sp2').addEventListener("click",function(){
    showTable1('t2');
});


function showTable(table){
    var elem=document.getElementById("t1");
         var hide = elem.style.display =="none";
         if (hide) {
             elem.style.display="block";
        } 
        else {
           elem.style.display="none";
        }
}

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
    <script>
        function processdpt(s1,s2,s3,s4){
            var s1 = document.getElementById('cite');
            var s2 = document.getElementById('getroom');
            var s3 = document.getElementById('laboratory');
            var s4 = document.getElementById('lecture');
            
           
           

            s2.innerHTML = "";
          

            if ((s3.checked == true && s1.selected == true))  {
             
                var optionArray = ['its 200|ITS 200','its 201|ITS 201','ptc 201|PTC 201',
                'ptc 302|PTC 302','ptc 303|PTC 303','ptc 304|PTC 304','ptc 305|PTC 305','ptc 306|PTC 306'];
               
            }else if ((s4.checked == true && s1.selected==true)){

                var optionArray = [
                'ptc 403|PTC 403','ptc 404|PTC 404','ptc 405|PTC 405','ptc 406|PTC 406'];
                
            }
            
            for( var option in optionArray){
                var pair = optionArray[option].split("|");
                var newoption = document.createElement("option");
                newoption.value = pair[0];
                newoption.innerHTML=pair[1];
                s2.options.add(newoption);
            }
        }

        
    </script>



  </body>
  
</html>