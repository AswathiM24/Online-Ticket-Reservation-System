<?php
session_start();

include 'db_connection.php';

if (!isset($_SESSION['login_user'])) {

  header("location: login.php");
}
$b_id=$_GET['bus_id'];

 $data=mysqli_query($conn,"SELECT * FROM bus_tb WHERE bus_id='$b_id'");
 $row=mysqli_fetch_assoc($data);


 if(isset($_POST['update_bus']))
 {
  $bus_name=$_POST['bus_name'];
  $starting_point=$_POST['starting_point'];
  $end_point=$_POST['end_point'];
  $description=$_POST['description'];
  $seats=$_POST['seats'];
  $route=$_POST['route'];
  $date=$_POST['date'];
  $time=$_POST['time'];

  $update=mysqli_query($conn,"UPDATE `bus_tb` SET `bus_name`='$bus_name',`bus_starting_point`='$starting_point',`bus_end_point`='$end_point',`bus_description`='$description',`bus_total_seats`='$seats',`bus_route`='$route',`date`='$date',`time`='$time' WHERE `bus_id`='$b_id'");

  if($update)
  {
    $_SESSION['up_success'] = "Bus Details Edited ";

          header("location: buses.php");

            }else{

              echo "<script>alert('Bus Details not Edited')</script>";
        echo "<script>window.location='edit_buses.php'</script>";
  }

 }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Vali Admin - Free Bootstrap 4 Admin Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
   <?php include 'header.php'; ?>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <?php include 'leftbar.php'; ?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Edit Buses</h1>
          <p></p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
        </ul>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="row">
              <div class="col-lg-6">
                <form method="POST">
                   <div class="form-group">
                    <label class="col-form-label" for="inputDefault">Bus Name</label>&emsp;&emsp;<span id="sp1" style="color: red;"></span>
                    <input class="form-control" value="<?php echo $row['bus_name'];  ?>" name="bus_name" onkeyup="clearmsg('sp1')" id="bus_name" type="text">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="inputDefault">Starting Point</label>&emsp;&emsp;<span id="sp2" style="color: red;">
                    <input class="form-control" value="<?php echo $row['bus_starting_point']; ?>" name="starting_point" onkeyup="clearmsg('sp2')" id="starting_point" type="text">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="inputDefault">End Point</label>&emsp;&emsp;<span id="sp3" style="color: red;">
                    <input class="form-control" value="<?php echo $row['bus_end_point']; ?>" name="end_point" onkeyup="clearmsg('sp3')" id="end_point" type="text">
                  </div>
                   <div class="form-group">
                    <label for="exampleTextarea">Description</label>&emsp;&emsp;<span id="sp4" style="color: red;">
                    <textarea class="form-control" value="" name="description" onkeyup="clearmsg('sp4')" id="description" rows="3"><?php echo $row['bus_description']; ?></textarea>
                  </div>
                   <div class="form-group">
                    <label class="col-form-label" for="inputDefault">Total Seats</label>&emsp;&emsp;<span id="sp5" style="color: red;">
                    <input class="form-control" value="<?php echo $row['bus_total_seats']; ?>" name="seats" onkeyup="clearmsg('sp5')" id="seats" type="text">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="inputDefault">Route</label>&emsp;&emsp;<span id="sp6" style="color: red;">
                    <input class="form-control" value="<?php echo $row['bus_route']; ?>" name="route" onkeyup="clearmsg('sp6')" id="route" type="text">
                  </div>

                  <div class="form-group">
                    <label class="col-form-label" for="inputDefault">Date</label>&emsp;&emsp;<span id="sp9" style="color: red;">
                    <input class="form-control" value="<?php echo $row['date']; ?>" name="date" onkeyup="clearmsg('sp9')" id="date" type="date">
                  </div>

                   <div class="form-group">
                    <label class="col-form-label" for="inputDefault">Time</label>&emsp;&emsp;<span id="sp10" style="color: red;">
                    <input class="form-control" value="<?php echo $row['time']; ?>" name="time" onkeyup="clearmsg('sp10')" id="time" type="time">
                  </div>

                   <div class="tile-footer">
              <button class="btn btn-primary" name="update_bus" onclick="return valid_buses()" type="submit">UPDATE</button>
            </div></form></div></div></div></div></div>
     
    </main>
   <?php include 'script.php'; ?>
  </body>

 <script type="text/javascript">
   
   function valid_buses()
   {
    var bus_name=document.getElementById('bus_name').value;
    var starting_point=document.getElementById('starting_point').value;
    var end_point=document.getElementById('end_point').value;
    var description=document.getElementById('description').value;
    var seats=document.getElementById('seats').value;
    var route=document.getElementById('route').value;
    
    if(bus_name=="")
    {
      document.getElementById('sp1').innerHTML="Bus name is empty!";
      return false;
    }

    if(starting_point=="")
    {
      document.getElementById('sp2').innerHTML="Starting point is empty!";
      return false;
    }

    if(end_point=="")
    {
      document.getElementById('sp3').innerHTML="End point is empty!";
      return false;
    }

    if(description=="")
    {
      document.getElementById('sp4').innerHTML="Description is empty!";
      return false;
    }

    if(seats=="")
    {
      document.getElementById('sp5').innerHTML="Seat is empty!";
      return false;
    }

    if(route=="")
    {
      document.getElementById('sp6').innerHTML="Route is empty!";
      return false;
    }

   }

   /*function clearmsg(sp)
   {
    document.getElementById(sp).innerHTML="";
    return false;
   }*/

 </script>
</html>