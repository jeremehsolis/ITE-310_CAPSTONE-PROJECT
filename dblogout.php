<?php
	
	date_default_timezone_set('Asia/Manila');

	$db = mysqli_connect('localhost','root','','schedulingSystem');
	if (!$db) {
		die("Connection Error: ". mysqli_connect_error());
	}
	if (isset($_POST['submit'])) {
		$query = "INSERT into activityout(timeout) VALUES (now())";
		mysqli_query($db, $query);
        header("Location: index.php");
		}
		else{
		
}

?>