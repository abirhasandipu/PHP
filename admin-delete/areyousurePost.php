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

  $result= mysqli_query($con, "SELECT * FROM posts WHERE ('$id'=id)");
  $row= mysqli_num_rows($result);


  $i=0;
  while ($retrive=mysqli_fetch_array($result)) {
    $id=$retrive['id'];
    $post_body=$retrive['body'];
    $posted_by=$retrive['added_by'];
    $img=$retrive['image'];
  
  }

}


echo "<br><br>Are you sure you want to delete this post (by $posted_by) from the database?<br><br><br>";
echo "<a style='background-color: #f44336; color: white; padding: 14px 25px; text-align: center; text-decoration: none; display: inline-block;' href='admin-delete-post.php?del=$id'> Delete Post </a>&ensp;&ensp;";

echo "<a style='background-color: #42f59e; color: white; padding: 14px 25px; text-align: center; text-decoration: none; display: inline-block;' href='../admin-post-management.php'> No, Go Back </a>";


?>


