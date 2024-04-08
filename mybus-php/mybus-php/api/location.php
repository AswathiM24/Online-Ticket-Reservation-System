<?php

include '../db_connection.php';

$bus_id=$_POST['bus_id'];
$latitude=$_POST['latitude'];
$longitude=$_POST['longitude'];

$query=mysqli_query($conn,"INSERT INTO location_tb(bus_id,latitude,longitude) VALUES('$bus_id','$latitude','$longitude')");

if($query)
{
	echo "Location updated";
}
else
{
	echo "Failed";
}

?>