<?php
	include('dbschedmg.php');
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
		$check = mysqli_query($db,"SELECT * FROM add WHERE start='$start' AND schedule='$schedule' AND getbuilding='$getbuilding' AND getroom='$getroom'");
		$checker = mysqli_query($db,"SELECT * FROM add WHERE end='$end' AND schedule='$schedule'  AND getbuilding='$getbuilding' AND getroom='$getroom'");
		if (mysqli_num_rows($check) > 0){
			header("Location: subjectManagement.php?error= Time Slot is already taken.");
		}
		elseif(mysqli_num_rows($checker) > 0){
			header("Location: subjectManagement.php?error= Time Slot is already taken.");
		}
			else{
				$query = "INSERT into add(subcode,section,tittle,start,end,schedule,schedule2,status,getbuilding,getroom,timesave) VALUES ($subcode','$section','$tittle','$start','$end','$schedule','$schedule2','$status','$getbuilding','$getroom'" or die(mysqli_error());
				mysqli_query($db, $query);
				header('location: subjectManagement.php');
			}
		}
		?>