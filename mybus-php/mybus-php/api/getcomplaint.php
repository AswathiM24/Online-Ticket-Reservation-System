<?php

include '../db_connection.php';

$login_id=$_GET['traveler_id'];

$r=mysqli_query($conn,"SELECT * FROM complaint_tb JOIN traveler_tb ON complaint_tb.traveler_id=traveler_tb.login_id JOIN bus_tb ON complaint_tb.bus_id=bus_tb.login_id WHERE complaint_tb.traveler_id='$login_id'");

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