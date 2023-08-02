	<?php
	//session_start();
	

	$db = mysqli_connect('localhost','root','','schedulingSystem');
	if (!$db) {
		die("Connection Error: ". mysqli_connect_error());
	}
	if (isset($_POST['submit'])) {
		$department = $_POST['department'];
		$building = $_POST['building'];
		$room = $_POST['room'];
		$check = mysqli_query($db," SELECT * FROM db_plot WHERE department='$department' AND building='$building' AND room='$room'");
		if (mysqli_num_rows($check)>0) {
			header("Location: plotmg.php?error=your input already exist.");
		}else{
		$status = $_POST['status'];
		$query = "INSERT into db_plot(department,building,room,status) VALUES ('$department','$building','$room','$status')" or die(mysqli_error());
		mysqli_query($db, $query);
		//$_SESSION['msg'] = "Information has been saved";
		header('location: plotmg.php');
}
}
	if(isset($_GET['delete'])){
		$db->query("DELETE FROM db_plot WHERE id='".$_GET['delete']."'") or die($db->error());
		//$_SESSION['msg'] = "Information has been deleted";
		header('location: plotmg.php');
	}
	$Result = mysqli_query($db,"SELECT * FROM db_plot order by department");
	$Resultbldg = mysqli_query($db,"SELECT * FROM db_plot order by building");
	$Resultroom = mysqli_query($db,"SELECT * FROM db_plot order by room");
?>