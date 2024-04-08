<?php
session_start();

include 'db_connection.php';

if (!isset($_SESSION['login_user'])) {

  header("location: login.php");
}

$b_id=$_GET['travel_login_id'];

$query=mysqli_query($conn,"DELETE FROM traveler_tb WHERE login_id='$b_id'");

$_SESSION['delloc']='Bus details deleted';
header('location: view_details.php');

?>