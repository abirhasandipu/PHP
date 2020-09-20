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

$var_name = $_SESSION['form_name'];

$id=$_GET['del'];

if(isset($var_name)){

  $result= mysqli_query($con, "SELECT * FROM users WHERE ('$id'=id)");
  $row= mysqli_num_rows($result);


  $i=0;
  while ($retrive=mysqli_fetch_array($result)) {
    $id=$retrive['id'];
    $fname=$retrive['first_name'];
    $lname=$retrive['last_name'];
    $img=$retrive['profile_pic'];
  
  }

}


echo "<br><br>Are you sure you want to delete <b> $fname $lname </b> from the database?<br><br><br>";
echo "<a style='background-color: #f44336; color: white; padding: 14px 25px; text-align: center; text-decoration: none; display: inline-block;' href='admin-delete-user.php?del=$id' href='admin-delete-user.php?del=$id'> Delete User </a>&ensp;&ensp;";

echo "<a style='background-color: #42f59e; color: white; padding: 14px 25px; text-align: center; text-decoration: none; display: inline-block;' href='../admin-panel.php'> No, Go Back </a>";


?>


