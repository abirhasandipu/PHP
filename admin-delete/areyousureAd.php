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

  $result= mysqli_query($con, "SELECT * FROM ads WHERE ('$id'=id)");
  $row= mysqli_num_rows($result);


  $i=0;
  while ($retrive=mysqli_fetch_array($result)) {
    $id=$retrive['id'];
    $book_name=$retrive['book_name'];
    $posted_by=$retrive['added_by'];
    $writer=$retrive['writer'];
  
  }

}


echo "<br><br>Are you sure you want to delete the ad of <b>$book_name</b> posted by <b>$posted_by</b> from the database?<br><br><br>";

echo "<a style='background-color: #f44336; color: white; padding: 14px 25px; text-align: center; text-decoration: none; display: inline-block;' href='admin-delete-ad.php?del=$id'> Delete Ad </a>&ensp;&ensp;";

echo "<a style='background-color: #42f59e; color: white; padding: 14px 25px; text-align: center; text-decoration: none; display: inline-block;' href='../admin-ads-management.php'> No, Go Back </a>";


?>



