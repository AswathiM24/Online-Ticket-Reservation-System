<?php

include '../db_connection.php';

$seats=$_GET['seats'];
$bus_id=$_GET['bus_id'];


$query=mysqli_query($conn,"SELECT * FROM booking_tb WHERE bus_id='$bus_id' AND seat='$seats'");

if(mysqli_num_rows($query)>0)
{
	echo "success";
}
else
{
	echo "Failure";
}

?>