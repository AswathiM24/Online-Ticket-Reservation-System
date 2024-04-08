<?php
include '../db_connection.php';

$name=$_POST['name'];
$address=$_POST['address'];
$email=$_POST['email'];
$contact=$_POST['mobile'];
$username=$_POST['username'];
$password=$_POST['password'];

$data=mysqli_query($conn,"INSERT INTO login_tb(username,password,type) VALUES('$username','$password',1)");

$id=mysqli_insert_id($conn);

$data1=mysqli_query($conn,"INSERT INTO traveler_tb(login_id,name,address,contact,email) VALUES('$id','$name','$address','$contact','$email')");

if($data && $data1)
{
	echo "Registration success";
}
else
{
	echo "Failed";
}

?>