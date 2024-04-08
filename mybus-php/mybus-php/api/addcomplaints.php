<?php

include '../db_connection.php';

$bus_id=$_POST['bus_login_id'];
$traveler_id=$_POST['traveler_id'];
$date=$_POST['date'];
$complaint=$_POST['complaint'];

$query=mysqli_query($conn,"INSERT INTO complaint_tb(traveler_id,bus_id,date,complaint) VALUES('$traveler_id','$bus_id','$date','$complaint')");

if($query)
{
	echo "Complaint Added Successfully";

}
else
{
	echo "Error";
}

?>