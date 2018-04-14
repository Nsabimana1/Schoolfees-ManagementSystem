<?php
// include'../backend/Controler/accessdatabase.php';
include'accessdatabase.php';
// include'/school brake side project/backend/Controler/accessdatabase.php';
$data = new AccessData;
$connect = $data->dbconnect();
if (isset($_POST['submit']))
{
	// $username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$prevelege = $_POST['prevelege'];
	// $sql = "SELECT * FROM '$prevelege' WHERE (student_email = '$email' and student_password = '$password') or (staff_email= '$email' and staff_password = '$password')";
	$current_user = new Current_user_information($email, $password);

	$sql = "SELECT * FROM students WHERE (student_email = '$email' and student_password = '$password')";
	$mysqli_result = mysqli_query($connect, $sql);
	$row = mysqli_num_rows($mysqli_result);
	// -- $row = mysqli_num_rows($mysqli_result);

	if($row > 0){
		echo "you are good";
		// header("location: homepage.php");
		// chdir("/school brake side project/homepage.php");
		// getwc();
		header("location:/school brake side project/homepage.php");
	}
	else{	$error = "Wrong input";
	 	echo $error;
		// header("location:./Model./backend/login.php");
		header("location:/school brake side project/login.php");
       	echo "<script type='text/javascript'> alert('This record does not exist'); </script>";
	}
}

  ?>
