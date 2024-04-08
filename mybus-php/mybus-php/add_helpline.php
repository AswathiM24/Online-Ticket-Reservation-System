<?php
session_start();
include 'db_connection.php';

if (!isset($_SESSION['login_user'])) {

  header("location: login.php");
}

if(isset($_POST['add_help']))
{
  $help=$_POST['help'];
  $contact=$_POST['contact'];

  $data=mysqli_query($conn,"INSERT INTO helpline_db(help,contact) VALUES('$help','$contact')");

  if($data)
  {
     $_SESSION['msg_success'] = "HelpLine Added ";

          header("location: helpline.php");

            }else{

              echo "<script>alert('helpline not added')</script>";
        echo "<script>window.location='add_helpline.php'</script>";
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
    <title>Helpline</title>
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
          <h1><i class="fa fa-dashboard"></i> Add HelpLine</h1>
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
                    <label class="col-form-label" for="inputDefault">Help</label><span id="sp1" style="color: red;"></span>
                    <input class="form-control" id="starting_point" name="help"  type="text">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="inputDefault">Contact</label><span id="sp2" style="color: red;"></span>
                    <input class="form-control" id="end_point" name="contact"  type="text">
                  </div>
                  <div class="tile-footer">
              <button class="btn btn-primary" name="add_help" onclick="return valid_buses()" type="submit">Submit</button>
            </div></form></div></div></div></div></div>
     
    </main>
   <?php include 'script.php'; ?>
  </body>

 <script type="text/javascript">
   
   function valid_buses()
   {
    
    var help=document.getElementById('starting_point').value;
    var contact=document.getElementById('end_point').value;
   
    
    

    if(help=="")
    {
      document.getElementById('sp1').innerHTML="help field is empty!";
      return false;
    }

    if(contact=="")
    {
      document.getElementById('sp2').innerHTML="contact field is empty!";
      return false;
    }

   } 

 </script>
</html>