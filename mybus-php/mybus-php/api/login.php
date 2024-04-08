<?php

include '../db_connection.php';

 $data=array();
    $jsonarray=json_decode(file_get_contents('php://input'),true);
    
    @$username = $jsonarray["username"];
    @$password = $jsonarray["password"];
     
         $query= "SELECT * FROM login_tb WHERE username='$username' AND password = '$password'";
         
            $result= mysqli_query($conn, $query);
         
            if(mysqli_num_rows($result) > 0)
            {  
                $row = mysqli_fetch_assoc($result);

                $data['success'] = 1;
                $data['data'] = $row;
                echo json_encode($data);
                 
               
            }
            
            else
            { 
                $data['success'] = 0;
                $data['message'] = "Invalid username or password!";

                echo json_encode($data);
            }
       
mysqli_close($conn);


?>