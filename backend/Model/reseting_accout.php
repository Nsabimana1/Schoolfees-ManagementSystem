<?php
include'accessdatabase.php';
$data = new AccessData;
$connect = $data->dbconnect();

if (isset($_POST["submit"]))
{
$old_password= $_POST['old_password'];
$new_password= $_POST['new_password'];
$sql = "UPDATE students SET student_password = '$new_password' WHERE student_password = '$old_password'";
$mysqli_result = mysqli_query($connect, $sql);
if($mysqli_result){
	header("location:/school brake side project/homepage.php");
}
else{
	echo "some thing went wrong try again";
}
}
 
?>