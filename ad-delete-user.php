<?php 

include("includes/header.php");

ob_start(); 

$var_name = $_SESSION['username'];

$timezone = date_default_timezone_set("Asia/Dhaka");

$con = mysqli_connect("localhost", "root", "", "social"); 
if(mysqli_connect_errno()) 
{
  echo "Failed to connect: " . mysqli_connect_errno();
}

$id=$_GET['b'];

mysqli_query($con, "DELETE FROM ads WHERE id='$id'");

header("location:ads.php");

 ?>