<!-- CREATE USER -->
<?php
 	$db = mysqli_connect('localhost','root','','schedulingsystem');
	if (!$db) {
		die("Connection Error: ". mysqli_connect_error());
	}
	if (isset($_POST['create'])) {
		$empId = $_POST['empId'];
		$lname = strtoupper($_POST['lname']);
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$check = mysqli_query($db," SELECT * FROM login WHERE username='$empId'");
		if (mysqli_num_rows($check)>0) {
			header("Location: accountadd.php?error=Username already exist.");
		}else{
			$user = $_POST['user'];
		$query = "INSERT into login (employee_id,fname,lname,mname,username,password,usertype) VALUES ('$empId','$fname','$lname','$mname','$empId','$lname','$user')"
		or die(mysqli_error());
		mysqli_query($db, $query);
		header('location:accountadd.php?success=Successfully Created an Account!');

}
}
$result = mysqli_query($db,"SELECT * FROM login order by user_id");
?>