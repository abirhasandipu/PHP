<?php 

include("../includes/admin-header.php");

ob_start(); 
session_start();

$timezone = date_default_timezone_set("Asia/Dhaka");

$con = mysqli_connect("localhost", "root", "", "social"); 
if(mysqli_connect_errno()) 
{
  echo "Failed to connect: " . mysqli_connect_errno();
}


$id=$_GET['del'];

mysqli_query($con, "DELETE FROM users WHERE id='$id'");

header("location:delete-result-user.php");

 ?>