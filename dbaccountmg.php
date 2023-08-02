	<?php
	$db = mysqli_connect('localhost','root','','schedulingsystem');
	if (!$db) {
		die("Connection Error: ". mysqli_connect_error());
	}
	if(isset($_GET['delete'])){
		$db->query("DELETE FROM login WHERE user_id='".$_GET['delete']."'") or die($db->error());
		//$_SESSION['msg'] = "Information has been deleted";
		header('location: accountmg.php');
	}

	$RESULT = mysqli_query($db,"SELECT * FROM `login` LIMIT 1, 1000");
	
?>