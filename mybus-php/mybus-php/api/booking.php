<?php

include '../db_connection.php';

$bus_id=$_POST['bus_id'];
$traveler_id=$_POST['login_id'];
$seat=$_POST['seats'];
$source=$_POST['source'];
$destination=$_POST['destination'];

$query=mysqli_query($conn,"INSERT INTO booking_tb(bus_id,traveler_id,seat,source,destination) VALUES('$bus_id','$traveler_id','$seat','$source','$destination')");

if($query)
{
	echo "Booking success";
}
else
{
	echo "Failed";
}

?>