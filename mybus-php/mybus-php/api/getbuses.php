<?php

include '../db_connection.php';

$r=mysqli_query($conn,"SELECT * FROM bus_tb");

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