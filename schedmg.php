<?php
include('dbschedmg.php');


    if (isset($_GET['edit'])){
        $id = $_GET['edit'];
        $edit_state = true;
        $rec = mysqli_query($db, "SELECT * FROM db_sched WHERE id=$id");
        $record = mysqli_fetch_array($rec);
        $department = $record['department'];
        $building = $record['building'];
        $room = $record['room'];
        $status = $record['status'];
        $id = $record['id'];
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="style.css">
    <style>
      
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body class="d-flex flex-column min-vh-100">
  <div class="container-fluid bg-dark bg-gradient">
      <header class="d-flex flex-wrap justify-content-center py-3 border-bottom border-dark no-gutters my-auto mx-auto">
        <div href="dashboard.html" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none mx-auto">
          <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
          <span class="fs-1 user-select-none">PHINMA-UPang Room Assignment and Scheduling System</span>
        </div>
    
              <ul class="nav nav-pills my-auto">   
                <li class="nav-item"><a href="dashboard.php" class="nav-link fs-5 mx-1 fw-bold">Home</a></li>
                <li class="nav-item"><a href="about.html" class="nav-link fs-5 mx-1 fw-bold">About</a></li>
                <li class="nav-item"><a href="contact.html" class="nav-link fs-5 mx-1 fw-bold">Contact Us</a></li>
                <li class="nav-item"><a href="index.php" class="nav-link fs-5 mx-1 fw-bold">Log Out</a></li>
              </ul>
        </header>
    </div>
<div class="container-fluid">
  <br>
  <div class="container">
      <section class="mb-5">
         <table class="table table-striped table-bordered border-success table-hover">
          <thead class="table-dark">
            <tr>
              <th class="col text-center">Department</th>
              <th class="col text-center">Building</th>
              <th class="col text-center">Room</th>
              <th class="col text-center">Status</th>
              <th class="col text-center">Action</th>
            </tr>
          </thead>
          <tbody>
                                    <?php
                                    include('dbplotmg.php');
                                    while ($line = mysqli_fetch_array($result)){ ?>
                                        <tr>
                                            <td class="col text-center"><?php echo strtoupper($line['department']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['building']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['room']); ?></td>
                                            <td class="col text-center"><?php echo strtoupper($line['status']); ?></td>
                                            <td class="text-center"><button class="btn btn-success mx-1 my-1"><a class="text-light" href="subjectManagement.php?have=<?php echo $line['id']; ?>" style="color:#000; text-decoration:none;">Add schedule</a></button><button  class="btn btn-warning mx-1" type="submit"><a class="text-dark" href="schedmg.php?edit=<?php echo $line['id']; ?>" style="color:#000; text-decoration:none;">Edit</a></button><input class="btn btn-danger mx-1" type="button" onclick="deleteme(<?php echo $line['id']; ?>)" name="Delete" value="Delete"></td>
                                        </tr>
                                        <script language="javascript">
                                            function deleteme(delid){
                                                if (confirm("Are you sure you want to delete this record?")) {
                                                    window.location.href='dbschedmg.php?delete=' +delid+'';
                                                    return true;
                                                }
                                            }
                                        </script>
                                <?php }?>
                                </tbody>
         </table>
      </section>
    </div>
      <div class="col fillupform text-center container">
                        <form action="dbschedmg.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <td>
              <span style="font-weight:bold">Department:</span>
              <select class="text-uppercase" style="width: 85px; height: 35px; border-radius: 5px;" name="department" id="department" required>
                <option value disabled selected>Department</option>
                        <?php
                         while($rows = mysqli_fetch_array($Result)){?>
                            <option class="text-uppercase" id="department" name="department"
                            <?php
                                    if ($department == $rows[1]) {
                                        echo "selected";
                                    }?>>
                                <?php echo $rows[1];?>
                                </option>
                        <?php }?>
                    </select>
                </td>
                <td>
              <span style="font-weight:bold">Building:</span>
              <select class="text-uppercase" style="width: 85px; height: 35px; border-radius: 5px;" name="building" id="bldg" required>
                <option value disabled selected>Building</option>
                        <?php
                         while($row1 = mysqli_fetch_array($Resultbldg)){?>
                            <option id="building" name="bldg"
                            <?php
                                    if ($building == $row1[2]) {
                                        echo "selected";
                                    }?>>
                                <?php echo $row1[2];?>
                                </option>
                        <?php }?>
                    </select>
                </td>
                <td>
              <span style="font-weight:bold">Room:</span>
              <select class="text-uppercase" style="width: 85px; height: 35px; border-radius: 5px;" name="room" id="room" required>
                <option value disabled selected>Room</option>
                        <?php
                         while($row2 = mysqli_fetch_array($Resultroom)){?>
                            <option id="room" name="room"
                            <?php
                                    if ($room == $row2[3]) {
                                        echo "selected";
                                    }?>>
                                <?php echo $row2[3];?>
                                </option>
                        <?php }?>
                    </select>
                </td>
                <td>
              <td class="right-input">Status:</td>
                <td><input class="bt" type="radio" name="status" id="laboratory" value="Laboratory"required
                    <?php
                    if ($status == "Laboratory") {
                        echo "checked";
                    }
                    ?>
                    ><span style="font-weight:bold; margin-right:9px;margin-left:5px;">Laboratory</span>

                <input class="bt" type="radio" name="status" id="lecture" value="Lecture"required
                <?php
                    if ($status == "Lecture") {
                        echo "checked";
                    }
                    ?>
                ><span style="font-weight:bold; margin-right:9px;margin-left:5px;">Lecture</span>
                </td>
                </td><br/>
                <?php if ($edit_state == true): ?>
                <div><button class="btn btn-success my-5" type="submit" name="update" >Update</button>
                <?php else: ?>
                    <button class="btn btn-success my-5" type="submit" name="submit" >Add</button>
                    <button class="btn btn-success my-5" type="reset" >Clear</button>
                <?php endif ?> </div>


        </form>
                        <div class="row"></div>
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