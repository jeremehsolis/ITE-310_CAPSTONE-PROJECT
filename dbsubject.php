



	<?php
	
	date_default_timezone_set('Asia/Manila');
	
	
	if (!isset($_SESSION)) { 
  // no session has been started yet
  session_start(); 
} 
	$userde = $_SESSION['userde'];
	$subcode = '';
	$section = '';
	$tittle = '';
	$start = '';
	$end = '';
	$schedule = '';
	$status = '';
	$getbuilding = '';
	$getroom = '';
	$id = 0;
	$output = '';
	$edit_state = false;
	$change = false;
	
	

	$db = mysqli_connect('localhost','root','','schedulingsystem');
	if (!$db) {
		die("Connection Error: ". mysqli_connect_error());
		
		}
		
		
			/*$sel = "SELECT * FROM login";
   $query1 = mysqli_query($db,$sel);
    $resul= mysqli_fetch_assoc($query1);
    $userd = $resul['employee_id'];*/
	
    if (isset($_POST['submitsub'])) {
		
			
		$subcode = $_POST['subcode'];
		$section = $_POST['section'];
		$tittle = $_POST['tittle'];
		$start = $_POST['start'];
		$end = $_POST['end'];
		$schedule = $_POST['schedule'];
		$status = $_POST['status'];
		$getbuilding = $_POST['getbuilding'];
		$getroom = $_POST['getroom'];
		$check = mysqli_query($db,"SELECT * FROM db_sub WHERE start='$start' AND schedule='$schedule' AND getbuilding='$getbuilding' AND getroom='$getroom'");
		$checker = mysqli_query($db,"SELECT * FROM db_sub WHERE end='$end' AND schedule='$schedule'  AND getbuilding='$getbuilding' AND getroom='$getroom'");
		if (mysqli_num_rows($check) > 0){
			header("Location: subjectManagement.php?error= Time Slot is already taken.");
		}
		elseif(mysqli_num_rows($checker) > 0){
			header("Location: subjectManagement.php?error= Time Slot is already taken.");
		}
			else{
				$query = "INSERT into addoutput(add_userlogged,add_subcode,add_section,add_tittle,add_start,add_end,add_schedule,add_schedule2,add_status,add_getbuilding,add_getroom,add_timesave) VALUES ('$userde','$subcode','$section','$tittle','$start','$end','$schedule','$schedule2','$status','$getbuilding','$getroom',now())" or die(mysqli_error());
				mysqli_query($db, $query);
				header('location: subjectManagement.php');
			}
		}
	
	if (isset($_POST['submitsub'])) {
		
		$username;	
		$subcode = $_POST['subcode'];
		$section = $_POST['section'];
		$tittle = $_POST['tittle'];
		$start = $_POST['start'];
		$end = $_POST['end'];
		$schedule = $_POST['schedule'];
		$status = $_POST['status'];
		$getbuilding = $_POST['getbuilding'];
		$getroom = $_POST['getroom'];
		$check = mysqli_query($db,"SELECT * FROM db_sub WHERE start='$start' AND schedule='$schedule' AND getbuilding='$getbuilding' AND getroom='$getroom'");
		$checker = mysqli_query($db,"SELECT * FROM db_sub WHERE end='$end' AND schedule='$schedule'  AND getbuilding='$getbuilding' AND getroom='$getroom'");
		if (mysqli_num_rows($check) > 0){
			header("Location: subjectManagement.php?error= Time Slot is already taken.");
		}
		elseif(mysqli_num_rows($checker) > 0){
			header("Location: subjectManagement.php?error= Time Slot is already taken.");
		}
			else{
				$query = "INSERT into db_sub(subcode,section,tittle,start,end,schedule,schedule2,status,getbuilding,getroom,userlogged,timesave) VALUES ('$subcode','$section','$tittle','$start','$end','$schedule','$schedule2','$status','$getbuilding','$getroom','$userd',now())" or die(mysqli_error());
				mysqli_query($db, $query);
				header('location: subjectManagement.php');
			}
		}
		
	if (isset($_POST['updatesub'])) {
		$subcode = $_POST['subcode'];
		$section = $_POST['section'];
		$tittle = $_POST['tittle'];
		$start = $_POST['start'];
		$end = $_POST['end'];
		$schedule = $_POST['schedule'];
		$status = $_POST['status'];
		$getbuilding = $_POST['getbuilding'];
		$getroom = $_POST['getroom'];
		$id = $_POST['id'];
		$check1 = mysqli_query($db,"SELECT * FROM db_sub WHERE start='$start' AND end='$end' AND schedule='$schedule' AND getbuilding='$getbuilding' AND getroom='$getroom'");
		$checker1 = mysqli_query($db,"SELECT * FROM db_sub WHERE end>'$start' AND schedule='$schedule' AND getroom='$getroom'");
		$checker2 = mysqli_query($db,"SELECT * FROM db_sub WHERE end='$start' AND schedule='$schedule' AND getroom='$getroom'");
      
		mysqli_query($db, "UPDATE db_sub SET subcode='$subcode', section='$section', tittle='$tittle', start='$start', end='$end', schedule='$schedule', schedule2='$schedule2', status='$status', getbuilding='$getbuilding', getroom='$getroom' WHERE id=$id ");
		$query = "INSERT into updateoutput(update_userlogged, update_subcode,update_section,update_tittle,update_start,update_end,update_schedule,update_schedule2,update_status,update_getbuilding,update_getroom,update_timesave) VALUES ('$userde','$subcode','$section','$tittle','$start','$end','$schedule','$schedule2','$status','$getbuilding','$getroom',now())" or die(mysqli_error());
				mysqli_query($db, $query);
		header('location: subjectManagement.php');
				
		
	}
	if(isset($_GET['delete'])){
		
		$sql = "SELECT * FROM db_sub WHERE id = '".$_GET['delete']."'";

$result = $db->query($sql);
if ($result->num_rows > 0) {
  // Store the data in a PHP array
  $data = $result->fetch_assoc();
}
$subcode = $data['subcode'];
		$section = $data['section'];
		$tittle = $data['tittle'];
		$start = $data['start'];
		$end = $data['end'];
		$schedule = $data['schedule'];
		$status = $data['status'];
		$getbuilding = $data['getbuilding'];
		$getroom = $data['getroom'];

		$db->query("DELETE FROM db_sub WHERE id='".$_GET['delete']."'") or die($db->error());
		$sql = "INSERT into deletedoutput (deleted_userlogged,deleted_subcode,deleted_section,deleted_tittle,deleted_start,deleted_end,deleted_schedule,deleted_schedule2,deleted_status,deleted_getbuilding,deleted_getroom,deleted_timesave) VALUES ('$userde','$subcode','$section','$tittle','$start','$end','$schedule','$schedule2','$status','$getbuilding','$getroom',now())" or die(mysqli_error());
				mysqli_query($db, $sql);
		header('location: subjectManagement.php');
	}
	$RESULT = mysqli_query($db,"SELECT * FROM db_sub order by getroom asc");
	$RESULT1 = mysqli_query($db,"SELECT * FROM db_sub");
	$get_time = mysqli_query($db,"SELECT * FROM db_sub order by start");
	$get_room = mysqli_query($db, "SELECT * FROM db_sub order by getroom");

	$room1 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 200'");
	$room2 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 201'");
	$room3 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 201'");
	$room4 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 302'");
	$room5 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 303'");
	$room6 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 304'");
	$room7 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 305'");
	$room8 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 306'");
	$room9 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 403'");
	$room10 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 404'");
	$room11 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 405'");
	$room12 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 406'");

/* ITS 200 start*/

	$itstime1 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 200' AND schedule='Mon/Wed' ORDER BY section asc");
	$itstime2 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 200' AND schedule='Tue/Thu' ORDER BY section asc");
	$itstime3 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 200' AND schedule='Wed/Fri' ORDER BY section asc");
	$itstime4 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 200' AND schedule='Thu/Sat' ORDER BY section asc");

	$its1 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 200' AND schedule='Mon/Wed' AND start='07:30AM-09:00AM'");
	$its2 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 200' AND schedule='Mon/Wed' AND start='9:00AM-10:30AM'");
	$its3 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 200' AND schedule='Mon/Wed' AND start='10:30AM-12:00PM'");
	$its4 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 200' AND schedule='Mon/Wed' AND start='12:00PM-1:30PM'");
	$its5 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 200' AND schedule='Mon/Wed' AND start='1:30PM-3:00PM'");
	$its6 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 200' AND schedule='Mon/Wed' AND start='3:00PM-4:30PM'");
	$its7 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 200' AND schedule='Mon/Wed' AND start='4:30PM-6:00PM'");

	$its8 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 200' AND schedule='Tue/Thu' AND start='07:30AM-09:00AM'");
	$its9 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 200' AND schedule='Tue/Thu' AND start='9:00AM-10:30AM'");
	$its10 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 200' AND schedule='Tue/Thu' AND start='10:30AM-12:00PM'");
	$its11 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 200' AND schedule='Tue/Thu' AND start='12:00PM-1:30PM'");
	$its12 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 200' AND schedule='Tue/Thu' AND start='1:30PM-3:00PM'");
	$its13 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 200' AND schedule='Tue/Thu' AND start='3:00PM-4:30PM'");
	$its14 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 200' AND schedule='Tue/Thu' AND start='4:30PM-6:00PM'");

	$its15 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 200' AND schedule='Wed/Fri' AND start='07:30AM-09:00AM'");
	$its16 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 200' AND schedule='Wed/Fri' AND start='9:00AM-10:30AM'");
	$its17 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 200' AND schedule='Wed/Fri' AND start='10:30 AM-12:00PM'");
	$its18 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 200' AND schedule='Wed/Fri' AND start='12:00 PM-1:30PM'");
	$its19 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 200' AND schedule='Wed/Fri' AND start='1:30 PM-3:00PM'");
	$its20 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 200' AND schedule='Wed/Fri' AND start='3:00 PM-4:30PM'");
	$its21 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 200' AND schedule='Wed/Fri' AND start='4:30 PM-6:00PM'");

	$its22 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 200' AND schedule='Thu/Sat' AND start='07:30AM-09:00AM'");
	$its23 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 200' AND schedule='Thu/Sat' AND start='9:00AM-10:30AM'");
	$its24 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 200' AND schedule='Thu/Sat' AND start='10:30AM-12:00PM'");
	$its25 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 200' AND schedule='Thu/Sat' AND start='12:00PM-1:30PM'");
	$its26 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 200' AND schedule='Thu/Sat' AND start='1:30PM-3:00PM'");
	$its27 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 200' AND schedule='Thu/Sat' AND start='3:00PM-4:30PM'");
	$its28 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 200' AND schedule='Thu/Sat' AND start='4:30PM-6:00PM'");

/*ITS 200 end */ 

/*ITS 201 start */ 

	$ittime1 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 201' AND schedule='Mon/Wed' ORDER BY section asc");
	$ittime2 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 201' AND schedule='Tue/Thu' ORDER BY section asc");
	$ittime3 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 201' AND schedule='Wed/Fri' ORDER BY section asc");
	$ittime4 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 201' AND schedule='Thu/Sat' ORDER BY section asc");

	$it1 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 201' AND schedule='Mon/Wed' AND start='07:30AM-09:00AM'");
	$it2 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 201' AND schedule='Mon/Wed' AND start='9:00AM-10:30AM'");
	$it3 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 201' AND schedule='Mon/Wed' AND start='10:30AM-12:00PM'");
	$it4 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 201' AND schedule='Mon/Wed' AND start='12:00PM-1:30PM'");
	$it5 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 201' AND schedule='Mon/Wed' AND start='1:30PM-3:00PM'");
	$it6 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 201' AND schedule='Mon/Wed' AND start='3:00PM-4:30PM'");
	$it7 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 201' AND schedule='Mon/Wed' AND start='4:30PM-6:00PM'");

	$it8 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 201' AND schedule='Tue/Thu' AND start='07:30AM-09:00AM'");
	$it9 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 201' AND schedule='Tue/Thu' AND start='9:00AM-10:30AM'");
	$it10 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 201' AND schedule='Tue/Thu' AND start='10:30AM-12:00PM'");
	$it11 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 201' AND schedule='Tue/Thu' AND start='12:00PM-1:30PM'");
	$it12 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 201' AND schedule='Tue/Thu' AND start='1:30PM-3:00PM'");
	$it13 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 201' AND schedule='Tue/Thu' AND start='3:00PM-4:30PM'");
	$it14 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 201' AND schedule='Tue/Thu' AND start='4:30PM-6:00PM'");

	$it15 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 201' AND schedule='Wed/Fri' AND start='07:30AM-09:00AM'");
	$it16 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 201' AND schedule='Wed/Fri' AND start='9:00AM-10:30AM'");
	$it17 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 201' AND schedule='Wed/Fri' AND start='10:30AM-12:00PM'");
	$it18 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 201' AND schedule='Wed/Fri' AND start='12:00PM-1:30PM'");
	$it19 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 201' AND schedule='Wed/Fri' AND start='1:30PM-3:00PM'");
	$it20 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 201' AND schedule='Wed/Fri' AND start='3:00PM-4:30PM'");
	$it21 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 201' AND schedule='Wed/Fri' AND start='4:30PM-6:00PM'");

	$it22 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 201' AND schedule='Thu/Sat' AND start='07:30AM-09:00AM'");
	$it23 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 201' AND schedule='Thu/Sat' AND start='9:00AM-10:30AM'");
	$it24 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 201' AND schedule='Thu/Sat' AND start='10:30AM-12:00PM'");
	$it25 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 201' AND schedule='Thu/Sat' AND start='12:00PM-1:30PM'");
	$it26 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 201' AND schedule='Thu/Sat' AND start='1:30PM-3:00PM'");
	$it27 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 201' AND schedule='Thu/Sat' AND start='3:00PM-4:30PM'");
	$it28 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='its 201' AND schedule='Thu/Sat' AND start='4:30PM-6:00PM'");
	
/*ITS 201 end */ 	

/*PTC 201 start */ 
$ptc201time1 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 201' AND schedule='Mon/Wed' ORDER BY section asc");
	$ptc201time2 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 201' AND schedule='Tue/Thu' ORDER BY section asc");
	$ptc201time3 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 201' AND schedule='Wed/Fri' ORDER BY section asc");
	$ptc201time4 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 201' AND schedule='Thu/Sat' ORDER BY section asc");

	$ptc2011 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 201' AND schedule='Mon/Wed' AND start='07:30AM-09:00AM'");
	$ptc2012 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 201' AND schedule='Mon/Wed' AND start='9:00AM-10:30AM'");
	$ptc2013 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 201' AND schedule='Mon/Wed' AND start='10:30AM-12:00PM'");
	$ptc2014 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 201' AND schedule='Mon/Wed' AND start='12:00PM-1:30PM'");
	$ptc2015 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 201' AND schedule='Mon/Wed' AND start='1:30PM-3:00PM'");
	$ptc2016 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 201' AND schedule='Mon/Wed' AND start='3:00PM-4:30PM'");
	$ptc2017 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 201' AND schedule='Mon/Wed' AND start='4:30PM-6:00PM'");

	$ptc2018 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 201' AND schedule='Tue/Thu' AND start='07:30AM-09:00AM'");
	$ptc2019 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 201' AND schedule='Tue/Thu' AND start='9:00AM-10:30AM'");
	$ptc20110 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 201' AND schedule='Tue/Thu' AND start='10:30AM-12:00PM'");
	$ptc20111 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 201' AND schedule='Tue/Thu' AND start='12:00PM-1:30PM'");
	$ptc20112 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 201' AND schedule='Tue/Thu' AND start='1:30PM-3:00PM'");
	$ptc20113 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 201' AND schedule='Tue/Thu' AND start='3:00PM-4:30PM'");
	$ptc20114 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 201' AND schedule='Tue/Thu' AND start='4:30PM-6:00PM'");

	$ptc20115 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 201' AND schedule='Wed/Fri' AND start='07:30AM-09:00AM'");
	$ptc20116 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 201' AND schedule='Wed/Fri' AND start='9:00AM-10:30AM'");
	$ptc20117 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 201' AND schedule='Wed/Fri' AND start='10:30AM-12:00PM'");
	$ptc20118 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 201' AND schedule='Wed/Fri' AND start='12:00PM-1:30PM'");
	$ptc20119 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 201' AND schedule='Wed/Fri' AND start='1:30PM-3:00PM'");
	$ptc20120 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 201' AND schedule='Wed/Fri' AND start='3:00PM-4:30PM'");
	$ptc20121 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 201' AND schedule='Wed/Fri' AND start='4:30PM-6:00PM'");

	$ptc20122 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 201' AND schedule='Thu/Sat' AND start='07:30AM-09:00AM'");
	$ptc20123 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 201' AND schedule='Thu/Sat' AND start='9:00AM-10:30AM'");
	$ptc20124 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 201' AND schedule='Thu/Sat' AND start='10:30AM-12:00PM'");
	$ptc20125 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 201' AND schedule='Thu/Sat' AND start='12:00PM-1:30PM'");
	$ptc20126 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 201' AND schedule='Thu/Sat' AND start='1:30PM-3:00PM'");
	$ptc20127 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 201' AND schedule='Thu/Sat' AND start='3:00PM-4:30PM'");
	$ptc20128 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 201' AND schedule='Thu/Sat' AND start='4:30PM-6:00PM'");
/*PTC 201 end */ 

/*PTC 303 start */ 
$ptc303time1 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 303' AND schedule='Mon/Wed' ORDER BY section asc");
	$ptc303time2 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 303' AND schedule='Tue/Thu' ORDER BY section asc");
	$ptc303time3 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 303' AND schedule='Wed/Fri' ORDER BY section asc");
	$ptc303time4 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 303' AND schedule='Thu/Sat' ORDER BY section asc");

	$ptc3031 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 303' AND schedule='Mon/Wed' AND start='07:30AM-09:00AM'");
	$ptc3032 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 303' AND schedule='Mon/Wed' AND start='9:00AM-10:30AM'");
	$ptc3033 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 303' AND schedule='Mon/Wed' AND start='10:30AM-12:00PM'");
	$ptc3034 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 303' AND schedule='Mon/Wed' AND start='12:00PM-1:30PM'");
	$ptc3035 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 303' AND schedule='Mon/Wed' AND start='1:30PM-3:00PM'");
	$ptc3036 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 303' AND schedule='Mon/Wed' AND start='3:00PM-4:30PM'");
	$ptc3037 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 303' AND schedule='Mon/Wed' AND start='4:30PM-6:00PM'");

	$ptc3038 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 303' AND schedule='Tue/Thu' AND start='07:30AM-09:00AM'");
	$ptc3039 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 303' AND schedule='Tue/Thu' AND start='9:00AM-10:30AM'");
	$ptc30310 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 303' AND schedule='Tue/Thu' AND start='10:30AM-12:00PM'");
	$ptc30311 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 303' AND schedule='Tue/Thu' AND start='12:00PM-1:30PM'");
	$ptc30312 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 303' AND schedule='Tue/Thu' AND start='1:30PM-3:00PM'");
	$ptc30313 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 303' AND schedule='Tue/Thu' AND start='3:00PM-4:30PM'");
	$ptc30314 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 303' AND schedule='Tue/Thu' AND start='4:30PM-6:00PM'");

	$ptc30315 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 303' AND schedule='Wed/Fri' AND start='07:30AM-09:00AM'");
	$ptc30316 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 303' AND schedule='Wed/Fri' AND start='9:00AM-10:30AM'");
	$ptc30317 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 303' AND schedule='Wed/Fri' AND start='10:30AM-12:00PM'");
	$ptc30318 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 303' AND schedule='Wed/Fri' AND start='12:00PM-1:30PM'");
	$ptc30319 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 303' AND schedule='Wed/Fri' AND start='1:30PM-3:00PM'");
	$ptc30320 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 303' AND schedule='Wed/Fri' AND start='3:00PM-4:30PM'");
	$ptc30321 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 303' AND schedule='Wed/Fri' AND start='4:30PM-6:00PM'");

	$ptc30322 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 303' AND schedule='Thu/Sat' AND start='07:30AM-09:00AM'");
	$ptc30323 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 303' AND schedule='Thu/Sat' AND start='9:00AM-10:30AM'");
	$ptc30324 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 303' AND schedule='Thu/Sat' AND start='10:30AM-12:00PM'");
	$ptc30325 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 303' AND schedule='Thu/Sat' AND start='12:00PM-1:30PM'");
	$ptc30326 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 303' AND schedule='Thu/Sat' AND start='1:30PM-3:00PM'");
	$ptc30327 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 303' AND schedule='Thu/Sat' AND start='3:00PM-4:30PM'");
	$ptc30328 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 303' AND schedule='Thu/Sat' AND start='4:30PM-6:00PM'");
/*PTC 303 end */ 

/*PTC 304 start */ 
$ptc304time1 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 304' AND schedule='Mon/Wed' ORDER BY section asc");
	$ptc304time2 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 304' AND schedule='Tue/Thu' ORDER BY section asc");
	$ptc304time3 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 304' AND schedule='Wed/Fri' ORDER BY section asc");
	$ptc304time4 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 304' AND schedule='Thu/Sat' ORDER BY section asc");

	$ptc3041 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 304' AND schedule='Mon/Wed' AND start='07:30AM-09:00AM'");
	$ptc3042 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 304' AND schedule='Mon/Wed' AND start='9:00AM-10:30AM'");
	$ptc3043 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 304' AND schedule='Mon/Wed' AND start='10:30AM-12:00PM'");
	$ptc3044 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 304' AND schedule='Mon/Wed' AND start='12:00PM-1:30PM'");
	$ptc3045 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 304' AND schedule='Mon/Wed' AND start='1:30PM-3:00PM'");
	$ptc3046 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 304' AND schedule='Mon/Wed' AND start='3:00PM-4:30PM'");
	$ptc3047 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 304' AND schedule='Mon/Wed' AND start='4:30PM-6:00PM'");

	$ptc3048 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 304' AND schedule='Tue/Thu' AND start='07:30AM-09:00AM'");
	$ptc3049 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 304' AND schedule='Tue/Thu' AND start='9:00AM-10:30AM'");
	$ptc30410 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 304' AND schedule='Tue/Thu' AND start='10:30AM-12:00PM'");
	$ptc30411 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 304' AND schedule='Tue/Thu' AND start='12:00PM-1:30PM'");
	$ptc30412 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 304' AND schedule='Tue/Thu' AND start='1:30PM-3:00PM'");
	$ptc30413 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 304' AND schedule='Tue/Thu' AND start='3:00PM-4:30PM'");
	$ptc30414 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 304' AND schedule='Tue/Thu' AND start='4:30PM-6:00PM'");

	$ptc30415 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 304' AND schedule='Wed/Fri' AND start='07:30AM-09:00AM'");
	$ptc30416 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 304' AND schedule='Wed/Fri' AND start='9:00AM-10:30AM'");
	$ptc30417 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 304' AND schedule='Wed/Fri' AND start='10:30AM-12:00PM'");
	$ptc30418 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 304' AND schedule='Wed/Fri' AND start='12:00PM-1:30PM'");
	$ptc30419 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 304' AND schedule='Wed/Fri' AND start='1:30PM-3:00PM'");
	$ptc30420 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 304' AND schedule='Wed/Fri' AND start='3:00PM-4:30PM'");
	$ptc30421 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 304' AND schedule='Wed/Fri' AND start='4:30PM-6:00PM'");

	$ptc30422 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 304' AND schedule='Thu/Sat' AND start='07:30AM-09:00AM'");
	$ptc30423 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 304' AND schedule='Thu/Sat' AND start='9:00AM-10:30AM'");
	$ptc30424 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 304' AND schedule='Thu/Sat' AND start='10:30AM-12:00PM'");
	$ptc30425 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 304' AND schedule='Thu/Sat' AND start='12:00PM-1:30PM'");
	$ptc30426 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 304' AND schedule='Thu/Sat' AND start='1:30PM-3:00PM'");
	$ptc30427 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 304' AND schedule='Thu/Sat' AND start='3:00PM-4:30PM'");
	$ptc30428 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 304' AND schedule='Thu/Sat' AND start='4:30PM-6:00PM'");
/*PTC 304 end */ 

/*PTC 305 start */ 
$ptc305time1 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 305' AND schedule='Mon/Wed' ORDER BY section asc");
	$ptc305time2 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 305' AND schedule='Tue/Thu' ORDER BY section asc");
	$ptc305time3 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 305' AND schedule='Wed/Fri' ORDER BY section asc");
	$ptc305time4 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 305' AND schedule='Thu/Sat' ORDER BY section asc");

	$ptc3051 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 305' AND schedule='Mon/Wed' AND start='07:30AM-09:00AM'");
	$ptc3052 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 305' AND schedule='Mon/Wed' AND start='9:00AM-10:30AM'");
	$ptc3053 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 305' AND schedule='Mon/Wed' AND start='10:30AM-12:00PM'");
	$ptc3054 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 305' AND schedule='Mon/Wed' AND start='12:00PM-1:30PM'");
	$ptc3055 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 305' AND schedule='Mon/Wed' AND start='1:30PM-3:00PM'");
	$ptc3056 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 305' AND schedule='Mon/Wed' AND start='3:00PM-4:30PM'");
	$ptc3057 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 305' AND schedule='Mon/Wed' AND start='4:30PM-6:00PM'");

	$ptc3058 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc305' AND schedule='Tue/Thu' AND start='07:30AM-09:00AM'");
	$ptc3059 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc305' AND schedule='Tue/Thu' AND start='9:00AM-10:30AM'");
	$ptc30510 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc305' AND schedule='Tue/Thu' AND start='10:30AM-12:00PM'");
	$ptc30511 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc305' AND schedule='Tue/Thu' AND start='12:00PM-1:30PM'");
	$ptc30512 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc305' AND schedule='Tue/Thu' AND start='1:30PM-3:00PM'");
	$ptc30513 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc305' AND schedule='Tue/Thu' AND start='3:00PM-4:30PM'");
	$ptc30514 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc305' AND schedule='Tue/Thu' AND start='4:30PM-6:00PM'");

	$ptc30515 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 305' AND schedule='Wed/Fri' AND start='07:30AM-09:00AM'");
	$ptc30516 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 305' AND schedule='Wed/Fri' AND start='9:00AM-10:30AM'");
	$ptc30517 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 305' AND schedule='Wed/Fri' AND start='10:30AM-12:00PM'");
	$ptc30518 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 305' AND schedule='Wed/Fri' AND start='12:00PM-1:30PM'");
	$ptc30519 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 305' AND schedule='Wed/Fri' AND start='1:30PM-3:00PM'");
	$ptc30520 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 305' AND schedule='Wed/Fri' AND start='3:00PM-4:30PM'");
	$ptc30521 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 305' AND schedule='Wed/Fri' AND start='4:30PM-6:00PM'");

	$ptc30522 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 305' AND schedule='Thu/Sat' AND start='07:30AM-09:00AM'");
	$ptc30523 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 305' AND schedule='Thu/Sat' AND start='9:00AM-10:30AM'");
	$ptc30524 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 305' AND schedule='Thu/Sat' AND start='10:30AM-12:00PM'");
	$ptc30525 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 305' AND schedule='Thu/Sat' AND start='12:00PM-1:30PM'");
	$ptc30526 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 305' AND schedule='Thu/Sat' AND start='1:30PM-3:00PM'");
	$ptc30527 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 305' AND schedule='Thu/Sat' AND start='3:00PM-4:30PM'");
	$ptc30528 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 305' AND schedule='Thu/Sat' AND start='4:30PM-6:00PM'");
/*PTC 305 end */ 

/*PTC 306 start */ 
$ptc306time1 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 306' AND schedule='Mon/Wed' ORDER BY section asc");
	$ptc306time2 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 306' AND schedule='Tue/Thu' ORDER BY section asc");
	$ptc306time3 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 306' AND schedule='Wed/Fri' ORDER BY section asc");
	$ptc306time4 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 306' AND schedule='Thu/Sat' ORDER BY section asc");

	$ptc3061 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 306' AND schedule='Mon/Wed' AND start='07:30AM-09:00AM'");
	$ptc3062 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 306' AND schedule='Mon/Wed' AND start='9:00AM-10:30AM'");
	$ptc3063 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 306' AND schedule='Mon/Wed' AND start='10:30AM-12:00PM'");
	$ptc3064 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 306' AND schedule='Mon/Wed' AND start='12:00PM-1:30PM'");
	$ptc3065 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 306' AND schedule='Mon/Wed' AND start='1:30PM-3:00PM'");
	$ptc3066 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 306' AND schedule='Mon/Wed' AND start='3:00PM-4:30PM'");
	$ptc3067 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 306' AND schedule='Mon/Wed' AND start='4:30PM-6:00PM'");

	$ptc3068 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 306' AND schedule='Tue/Thu' AND start='07:30AM-09:00AM'");
	$ptc3069 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 306' AND schedule='Tue/Thu' AND start='9:00AM-10:30AM'");
	$ptc30610 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 306' AND schedule='Tue/Thu' AND start='10:30AM-12:00PM'");
	$ptc30611 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 306' AND schedule='Tue/Thu' AND start='12:00PM-1:30PM'");
	$ptc30612 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 306' AND schedule='Tue/Thu' AND start='1:30PM-3:00PM'");
	$ptc30613 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 306' AND schedule='Tue/Thu' AND start='3:00PM-4:30PM'");
	$ptc30614 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 306' AND schedule='Tue/Thu' AND start='4:30PM-6:00PM'");

	$ptc30615 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 306' AND schedule='Wed/Fri' AND start='07:30AM-09:00AM'");
	$ptc30616 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 306' AND schedule='Wed/Fri' AND start='9:00AM-10:30AM'");
	$ptc30617 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 306' AND schedule='Wed/Fri' AND start='10:30AM-12:00PM'");
	$ptc30618 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 306' AND schedule='Wed/Fri' AND start='12:00PM-1:30PM'");
	$ptc30619 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 306' AND schedule='Wed/Fri' AND start='1:30PM-3:00PM'");
	$ptc30620 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 306' AND schedule='Wed/Fri' AND start='3:00PM-4:30PM'");
	$ptc30621 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 306' AND schedule='Wed/Fri' AND start='4:30PM-6:00PM'");

	$ptc30622 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 306' AND schedule='Thu/Sat' AND start='07:30AM-09:00AM'");
	$ptc30623 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 306' AND schedule='Thu/Sat' AND start='9:00AM-10:30AM'");
	$ptc30624 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 306' AND schedule='Thu/Sat' AND start='10:30AM-12:00PM'");
	$ptc30625 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 306' AND schedule='Thu/Sat' AND start='12:00PM-1:30PM'");
	$ptc30626 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 306' AND schedule='Thu/Sat' AND start='1:30PM-3:00PM'");
	$ptc30627 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 306' AND schedule='Thu/Sat' AND start='3:00PM-4:30PM'");
	$ptc30628 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 306' AND schedule='Thu/Sat' AND start='4:30PM-6:00PM'");
/*PTC 306 end */ 

/*PTC 403 start */ 
$ptc403time1 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 403' AND schedule='Mon/Wed' ORDER BY section asc");
	$ptc403time2 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 403' AND schedule='Tue/Thu' ORDER BY section asc");
	$ptc403time3 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 403' AND schedule='Wed/Fri' ORDER BY section asc");
	$ptc403time4 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 403' AND schedule='Thu/Sat' ORDER BY section asc");

	$ptc4031 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 403' AND schedule='Mon/Wed' AND start='07:30AM-09:00AM'");
	$ptc4032 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 403' AND schedule='Mon/Wed' AND start='9:00AM-10:30AM'");
	$ptc4033 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 403' AND schedule='Mon/Wed' AND start='10:30AM-12:00PM'");
	$ptc4034 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 403' AND schedule='Mon/Wed' AND start='12:00PM-1:30PM'");
	$ptc4035 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 403' AND schedule='Mon/Wed' AND start='1:30PM-3:00PM'");
	$ptc4036 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 403' AND schedule='Mon/Wed' AND start='3:00PM-4:30PM'");
	$ptc4037 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 403' AND schedule='Mon/Wed' AND start='4:30PM-6:00PM'");

	$ptc4038 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 403' AND schedule='Tue/Thu' AND start='07:30AM-09:00AM'");
	$ptc4039 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 403' AND schedule='Tue/Thu' AND start='9:00AM-10:30AM'");
	$ptc40310 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 403' AND schedule='Tue/Thu' AND start='10:30AM-12:00PM'");
	$ptc40311 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 403' AND schedule='Tue/Thu' AND start='12:00PM-1:30PM'");
	$ptc40312 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 403' AND schedule='Tue/Thu' AND start='1:30PM-3:00PM'");
	$ptc40313 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 403' AND schedule='Tue/Thu' AND start='3:00PM-4:30PM'");
	$ptc40314 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 403' AND schedule='Tue/Thu' AND start='4:30PM-6:00PM'");

	$ptc40315 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 403' AND schedule='Wed/Fri' AND start='07:30AM-09:00AM'");
	$ptc40316 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 403' AND schedule='Wed/Fri' AND start='9:00AM-10:30AM'");
	$ptc40317 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 403' AND schedule='Wed/Fri' AND start='10:30AM-12:00PM'");
	$ptc40318 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 403' AND schedule='Wed/Fri' AND start='12:00PM-1:30PM'");
	$ptc40319 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 403' AND schedule='Wed/Fri' AND start='1:30PM-3:00PM'");
	$ptc40320 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 403' AND schedule='Wed/Fri' AND start='3:00PM-4:30PM'");
	$ptc40321 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 403' AND schedule='Wed/Fri' AND start='4:30PM-6:00PM'");

	$ptc40322 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 403' AND schedule='Thu/Sat' AND start='07:30AM-09:00AM'");
	$ptc40323 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 403' AND schedule='Thu/Sat' AND start='9:00AM-10:30AM'");
	$ptc40324 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 403' AND schedule='Thu/Sat' AND start='10:30AM-12:00PM'");
	$ptc40325 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 403' AND schedule='Thu/Sat' AND start='12:00PM-1:30PM'");
	$ptc40326 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 403' AND schedule='Thu/Sat' AND start='1:30PM-3:00PM'");
	$ptc40327 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 403' AND schedule='Thu/Sat' AND start='3:00PM-4:30PM'");
	$ptc40328 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 403' AND schedule='Thu/Sat' AND start='4:30PM-6:00PM'");
/*PTC 403 end */ 

/*PTC 404 start */ 
$ptc404time1 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 404' AND schedule='Mon/Wed' ORDER BY section asc");
	$ptc404time2 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 404' AND schedule='Tue/Thu' ORDER BY section asc");
	$ptc404time3 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 404' AND schedule='Wed/Fri' ORDER BY section asc");
	$ptc404time4 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 404' AND schedule='Thu/Sat' ORDER BY section asc");

	$ptc4041 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 404' AND schedule='Mon/Wed' AND start='07:30AM-09:00AM'");
	$ptc4042 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 404' AND schedule='Mon/Wed' AND start='9:00AM-10:30AM'");
	$ptc4043 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 404' AND schedule='Mon/Wed' AND start='10:30AM-12:00PM'");
	$ptc4044 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 404' AND schedule='Mon/Wed' AND start='12:00PM-1:30PM'");
	$ptc4045 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 404' AND schedule='Mon/Wed' AND start='1:30PM-3:00PM'");
	$ptc4046 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 404' AND schedule='Mon/Wed' AND start='3:00PM-4:30PM'");
	$ptc4047 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 404' AND schedule='Mon/Wed' AND start='4:30PM-6:00PM'");

	$ptc4048 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 404' AND schedule='Tue/Thu' AND start='07:30AM-09:00AM'");
	$ptc4049 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 404' AND schedule='Tue/Thu' AND start='9:00AM-10:30AM'");
	$ptc40410 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 404' AND schedule='Tue/Thu' AND start='10:30AM-12:00PM'");
	$ptc40411 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 404' AND schedule='Tue/Thu' AND start='12:00PM-1:30PM'");
	$ptc40412 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 404' AND schedule='Tue/Thu' AND start='1:30PM-3:00PM'");
	$ptc40413 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 404' AND schedule='Tue/Thu' AND start='3:00PM-4:30PM'");
	$ptc40414 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 404' AND schedule='Tue/Thu' AND start='4:30PM-6:00PM'");

	$ptc40415 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 404' AND schedule='Wed/Fri' AND start='07:30AM-09:00AM'");
	$ptc40416 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 404' AND schedule='Wed/Fri' AND start='9:00AM-10:30AM'");
	$ptc40417 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 404' AND schedule='Wed/Fri' AND start='10:30AM-12:00PM'");
	$ptc40418 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 404' AND schedule='Wed/Fri' AND start='12:00PM-1:30PM'");
	$ptc40419 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 404' AND schedule='Wed/Fri' AND start='1:30PM-3:00PM'");
	$ptc40420 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 404' AND schedule='Wed/Fri' AND start='3:00PM-4:30PM'");
	$ptc40421 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 404' AND schedule='Wed/Fri' AND start='4:30PM-6:00PM'");

	$ptc40422 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 404' AND schedule='Thu/Sat' AND start='07:30AM-09:00AM'");
	$ptc40423 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 404' AND schedule='Thu/Sat' AND start='9:00AM-10:30AM'");
	$ptc40424 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 404' AND schedule='Thu/Sat' AND start='10:30AM-12:00PM'");
	$ptc40425 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 404' AND schedule='Thu/Sat' AND start='12:00PM-1:30PM'");
	$ptc40426 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 404' AND schedule='Thu/Sat' AND start='1:30PM-3:00PM'");
	$ptc40427 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 404' AND schedule='Thu/Sat' AND start='3:00PM-4:30PM'");
	$ptc40428 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 404' AND schedule='Thu/Sat' AND start='4:30PM-6:00PM'");
/*PTC 404 end */ 

/*PTC 405 start */ 
$ptc405time1 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 405' AND schedule='Mon/Wed' ORDER BY section asc");
	$ptc405time2 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 405' AND schedule='Tue/Thu' ORDER BY section asc");
	$ptc405time3 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 405' AND schedule='Wed/Fri' ORDER BY section asc");
	$ptc405time4 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 405' AND schedule='Thu/Sat' ORDER BY section asc");

	$ptc4051 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 405' AND schedule='Mon/Wed' AND start='07:30AM-09:00AM'");
	$ptc4052 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 405' AND schedule='Mon/Wed' AND start='9:00AM-10:30AM'");
	$ptc4053 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 405' AND schedule='Mon/Wed' AND start='10:30AM-12:00PM'");
	$ptc4054 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 405' AND schedule='Mon/Wed' AND start='12:00PM-1:30PM'");
	$ptc4055 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 405' AND schedule='Mon/Wed' AND start='1:30PM-3:00PM'");
	$ptc4056 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 405' AND schedule='Mon/Wed' AND start='3:00PM-4:30PM'");
	$ptc4057 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 405' AND schedule='Mon/Wed' AND start='4:30PM-6:00PM'");

	$ptc4058 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 405' AND schedule='Tue/Thu' AND start='07:30AM-09:00AM'");
	$ptc4059 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 405' AND schedule='Tue/Thu' AND start='9:00AM-10:30AM'");
	$ptc40510 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 405' AND schedule='Tue/Thu' AND start='10:30AM-12:00PM'");
	$ptc40511 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 405' AND schedule='Tue/Thu' AND start='12:00PM-1:30PM'");
	$ptc40512 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 405' AND schedule='Tue/Thu' AND start='1:30PM-3:00PM'");
	$ptc40513 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 405' AND schedule='Tue/Thu' AND start='3:00PM-4:30PM'");
	$ptc40514 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 405' AND schedule='Tue/Thu' AND start='4:30PM-6:00PM'");

	$ptc40515 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 405' AND schedule='Wed/Fri' AND start='07:30AM-09:00AM'");
	$ptc40516 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 405' AND schedule='Wed/Fri' AND start='9:00AM-10:30AM'");
	$ptc40517 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 405' AND schedule='Wed/Fri' AND start='10:30AM-12:00PM'");
	$ptc40518 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 405' AND schedule='Wed/Fri' AND start='12:00PM-1:30PM'");
	$ptc40519 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 405' AND schedule='Wed/Fri' AND start='1:30PM-3:00PM'");
	$ptc40520 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 405' AND schedule='Wed/Fri' AND start='3:00PM-4:30PM'");
	$ptc40521 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 405' AND schedule='Wed/Fri' AND start='4:30PM-6:00PM'");

	$ptc40522 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 405' AND schedule='Thu/Sat' AND start='07:30AM-09:00AM'");
	$ptc40523 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 405' AND schedule='Thu/Sat' AND start='9:00AM-10:30AM'");
	$ptc40524 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 405' AND schedule='Thu/Sat' AND start='10:30AM-12:00PM'");
	$ptc40525 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 405' AND schedule='Thu/Sat' AND start='12:00PM-1:30PM'");
	$ptc40526 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 405' AND schedule='Thu/Sat' AND start='1:30PM-3:00PM'");
	$ptc40527 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 405' AND schedule='Thu/Sat' AND start='3:00PM-4:30PM'");
	$ptc40528 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 405' AND schedule='Thu/Sat' AND start='4:30PM-6:00PM'");
/*PTC 405 end */ 

/*PTC 406 start */ 
$ptc406time1 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 406' AND schedule='Mon/Wed' ORDER BY section asc");
	$ptc406time2 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 406' AND schedule='Tue/Thu' ORDER BY section asc");
	$ptc406time3 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 406' AND schedule='Wed/Fri' ORDER BY section asc");
	$ptc406time4 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 406' AND schedule='Thu/Sat' ORDER BY section asc");

	$ptc4061 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 406' AND schedule='Mon/Wed' AND start='07:30AM-09:00AM'");
	$ptc4062 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 406' AND schedule='Mon/Wed' AND start='9:00AM-10:30AM'");
	$ptc4063 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 406' AND schedule='Mon/Wed' AND start='10:30AM-12:00PM'");
	$ptc4064 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 406' AND schedule='Mon/Wed' AND start='12:00PM-1:30PM'");
	$ptc4065 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 406' AND schedule='Mon/Wed' AND start='1:30PM-3:00PM'");
	$ptc4066 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 406' AND schedule='Mon/Wed' AND start='3:00PM-4:30PM'");
	$ptc4067 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 406' AND schedule='Mon/Wed' AND start='4:30PM-6:00PM'");

	$ptc4068 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 406' AND schedule='Tue/Thu' AND start='07:30AM-09:00AM'");
	$ptc4069 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 406' AND schedule='Tue/Thu' AND start='9:00AM-10:30AM'");
	$ptc40610 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 406' AND schedule='Tue/Thu' AND start='10:30AM-12:00PM'");
	$ptc40611 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 406' AND schedule='Tue/Thu' AND start='12:00PM-1:30PM'");
	$ptc40612 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 406' AND schedule='Tue/Thu' AND start='1:30PM-3:00PM'");
	$ptc40613 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 406' AND schedule='Tue/Thu' AND start='3:00PM-4:30PM'");
	$ptc40614 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 406' AND schedule='Tue/Thu' AND start='4:30PM-6:00PM'");

	$ptc40615 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 406' AND schedule='Wed/Fri' AND start='07:30AM-09:00AM'");
	$ptc40616 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 406' AND schedule='Wed/Fri' AND start='9:00AM-10:30AM'");
	$ptc40617 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 406' AND schedule='Wed/Fri' AND start='10:30AM-12:00PM'");
	$ptc40618 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 406' AND schedule='Wed/Fri' AND start='12:00PM-1:30PM'");
	$ptc40619 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 406' AND schedule='Wed/Fri' AND start='1:30PM-3:00PM'");
	$ptc40620 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 406' AND schedule='Wed/Fri' AND start='3:00PM-4:30PM'");
	$ptc40621 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 406' AND schedule='Wed/Fri' AND start='4:30PM-6:00PM'");

	$ptc40622 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 406' AND schedule='Thu/Sat' AND start='07:30AM-09:00AM'");
	$ptc40623 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 406' AND schedule='Thu/Sat' AND start='9:00AM-10:30AM'");
	$ptc40624 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 406' AND schedule='Thu/Sat' AND start='10:30AM-12:00PM'");
	$ptc40625 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 406' AND schedule='Thu/Sat' AND start='12:00PM-1:30PM'");
	$ptc40626 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 406' AND schedule='Thu/Sat' AND start='1:30PM-3:00PM'");
	$ptc40627 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 406' AND schedule='Thu/Sat' AND start='3:00PM-4:30PM'");
	$ptc40628 = mysqli_query($db, "SELECT * FROM db_sub WHERE getroom='ptc 406' AND schedule='Thu/Sat' AND start='4:30PM-6:00PM'");
/*PTC 406 end */ 



?>