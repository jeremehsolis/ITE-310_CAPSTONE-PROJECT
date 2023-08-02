

	<?php
	
	date_default_timezone_set('Asia/Manila');
	
	$db = mysqli_connect('localhost','root','','schedulingSystem');
	if (!$db) {
		die("Connection Error: ". mysqli_connect_error());
	}
	session_start();
		

	if (isset($_POST['submit'])) {
	
		
		$username = $_POST['username'];
		

		$password = $_POST['password'];

		
		$query = "INSERT into activity(employee_id, timein) VALUES ('$username',now())";
		mysqli_query($db, $query);
		$check = mysqli_query($db," SELECT * FROM login WHERE username='$username' and password='$password' and usertype='admin'");
		$check1 = mysqli_query($db," SELECT * FROM login WHERE username='$username' and password='$password' and usertype='staff'");
		$fetch = mysqli_fetch_array($check);
		$fetch1 = mysqli_fetch_array($check1);
		$row = mysqli_num_rows($check);
		$row1 = mysqli_num_rows($check1);
		if ($row>0) {
			$_SESSION['user_id']=$fetch['user_id'];
			header('Location:dashboard.php');	
				
		}elseif($row1>0){
			$_SESSION['user_id']=$fetch1['user_id'];
			header('Location:dashboard1.php');
		}
		else{
		header("Location: index.php?error=Invalid Employee ID or Password");
		
}
	}
?>