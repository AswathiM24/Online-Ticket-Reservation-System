<?php

include '../db_connection.php';

@$log_id=$_GET['log_id'];

$r=mysqli_query($conn,"SELECT * FROM traveler_tb WHERE login_id='$log_id'");

$result = array();

if(mysqli_num_rows($r)>0) {


while($row = mysqli_fetch_assoc($r)){
         
     $result=$row;

   
}


echo json_encode($result);
}
else
{

    $result="0";
    echo json_encode($result);
}


?>