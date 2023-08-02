	<?php
	include('dbplotmg.php');
	//session_start();
	$department = '';
	$building = '';
	$room = '';
	$status = '';
	$id = 0;
	$edit_state = false;

	$db = mysqli_connect('localhost','root','','schedulingSystem');
	if (!$db) {
		die("Connection Error: ". mysqli_connect_error());
	}
	if (isset($_POST['submit'])) {
		$department = $_POST['department'];
		$building = $_POST['building'];
		$room = $_POST['room'];
		$status = $_POST['status'];
		$query = "INSERT into db_sched(department,building,room,status) VALUES ('$department','$building','$room','$status')" or die(mysqli_error());
		mysqli_query($db, $query);
		//$_SESSION['msg'] = "Information has been saved";
		header('location: schedmg.php');

}
	//update records
	if (isset($_POST['update'])) {
		$department = $_POST['department'];
		$building = $_POST['building'];
		$room = $_POST['room'];
		$status = $_POST['status'];
		$id = $_POST['id'];

		mysqli_query($db, "UPDATE db_sched SET department='$department', building='$building', room='$room', status='$status' WHERE id=$id ");
		header('location: schedmg.php');
	}
	if(isset($_GET['delete'])){
		$db->query("DELETE FROM db_sched WHERE id='".$_GET['delete']."'") or die($db->error());
		header('location: schedmg.php');
	}

	$result = mysqli_query($db,"SELECT * FROM db_sched order by department");
	$getbuildings = mysqli_query($db,"SELECT * FROM db_sched order by building");
	$getrooms = mysqli_query($db,"SELECT * FROM db_sched order by room");

?>