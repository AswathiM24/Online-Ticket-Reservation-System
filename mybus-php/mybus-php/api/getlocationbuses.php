<?php

include '../db_connection.php';

$travel_login=$_GET['login'];

$r=mysqli_query($conn,"SELECT * FROM booking_tb JOIN bus_tb ON booking_tb.bus_id=bus_tb.login_id JOIN traveler_tb ON booking_tb.traveler_id=traveler_tb.login_id JOIN location_tb ON booking_tb.bus_id=location_tb.bus_id WHERE traveler_tb.login_id='$travel_login'");

$result = array();

if(mysqli_num_rows($r)>0) {


while($row = mysqli_fetch_assoc($r)){
         
     $result[]=$row;

   
}


echo json_encode($result);
}
else
{

    $result="0";
    echo json_encode($result);
}


?>