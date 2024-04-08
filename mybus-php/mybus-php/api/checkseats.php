<?php

include '../db_connection.php';

$login_id=$_GET['login_id'];


$r=mysqli_query($conn,"SELECT * FROM booking_tb WHERE traveler_id='$login_id'");

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
    echo json_encode($data);
}


?>