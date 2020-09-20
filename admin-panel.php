<?php

include("includes/admin-header.php");

ob_start(); 
session_start();

$timezone = date_default_timezone_set("Asia/Dhaka");

$con = mysqli_connect("localhost", "root", "", "social"); 
if(mysqli_connect_errno()) 
{
  echo "Failed to connect: " . mysqli_connect_errno();
}

$var_name = $_SESSION['form_name'];


if(isset($var_name)){

  $result= mysqli_query($con, "SELECT * FROM users");
  $row= mysqli_num_rows($result);

  echo "<div class='container'>";
  echo "<h3 style='color:tomato;'> <br> User Management </h3>";
  echo "Total Registered users: " .$row;
  echo "<br><br>";
  echo "<table class='table table-bordered table-responsive'>";
  echo "<tr align='center'>";

  echo "<th>S.No </th>";
  echo "<th>First Name</th>";
  echo "<th>Last Name</th>";
  echo "<th>Email</th>";
  echo "<th>Profile Image</th>";
  echo "<th>Delete User</th>";
  //echo "<th>Edit User Details</th>";
  echo "</tr>";


  $i=0;
  while ($retrive=mysqli_fetch_array($result)) {
    $id=$retrive['id'];
    $fname=$retrive['first_name'];
    $lname=$retrive['last_name'];
    $email=$retrive['email'];
    $img=$retrive['profile_pic'];



      echo "<tr align='center'>";
      echo "<th>".$i=$i+1;"</th>";
      echo "<th>$fname</th>";
      echo "<th>$lname</th>";
      echo "<th>$email</th>";
      echo "<th><img src='$img' height='150px' width='150px'</th>";
      
      echo "<th><a href='admin-delete/areyousureUser.php?del=$id'><button class='btn btn-danger' > Delete User </button></a></th>";

      //echo "<th><a href='update-admin.php?user=$id'><button class='btn btn-warning' > Edit Profile </button></a></th>";

     // echo "<th><a href='#'><button class='btn btn-danger' onClick='showMessage()'> Confirmation test </button></a></th>";
  }


  echo "<a style='background-color: #42f59e; color: white; padding: 10px 21px; text-align: center; text-decoration: none; display: inline-block;' href='admin-post-management.php'><b>Post management</b></a> &ensp;&ensp;";
  echo "<a style='background-color: #42f59e; color: white; padding: 10px 21px; text-align: center; text-decoration: none; display: inline-block;' href='admin-ads-management.php'><b>Ads management</b></a> &ensp;&ensp;";
  echo "<a style='background-color: #fc4903; color: white; padding: 10px 21px; text-align: center; text-decoration: none; display: inline-block;' href='includes/handlers/admin-logout.php'><b>Logout</b></a>";






}


else {
  header("location:admin.php");
}


 ?>

