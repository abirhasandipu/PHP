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

  $result= mysqli_query($con, "SELECT id, added_by, body, image FROM posts WHERE deleted='no' ORDER BY id DESC");
  $row= mysqli_num_rows($result);

  echo "<div class='container'>";
  echo "<h3 style='color:tomato;'> <br> Post Management</h3>";
  echo "Total Number of Posts: " .$row;
  echo "<br><br>";
  echo "<table class='table table-bordered table-responsive'>";
  echo "<tr align='center'>";

  
  echo "<th>S.No </th>";
  echo "<th>User Name</th>";
  echo "<th>Post Body</th>";
  echo "<th>Image</th>";
  echo "<th>Delete Post</th>";
  echo "</tr>";


  $i=0;
  while ($retrive=mysqli_fetch_array($result)) {
    $id=$retrive['id'];
    $user_name=$retrive['added_by'];
    $post_body=$retrive['body'];
    $img=$retrive['image'];
    

      echo "<tr align='center'>";
      echo "<th>".$i=$i+1;"</th>";
      echo "<th>$user_name</th>";
      echo "<th>$post_body</th>";
      echo "<th><img src='$img'  width='200px'</th>";

      echo "<th><a href='admin-delete/areyousurePost.php?del=$id'><button class='btn btn-danger' > Delete Post </button></a></th>";
  }


  echo "<a style='background-color: #42f59e; color: white; padding: 10px 21px; text-align: center; text-decoration: none; display: inline-block;' href='admin-panel.php'><b>User Management</b></a> &ensp;&ensp;";
  echo "<a style='background-color: #42f59e; color: white; padding: 10px 21px; text-align: center; text-decoration: none; display: inline-block;' href='admin-ads-management.php'><b>Ads management</b></a>&ensp;&ensp;";

  echo "<a style='background-color: #fc4903; color: white; padding: 10px 21px; text-align: center; text-decoration: none; display: inline-block;' href='includes/handlers/admin-logout.php'><b>Logout</b></a>";

}


else {
  header("location:admin.php");
}

 ?>

