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

  $result= mysqli_query($con, "SELECT * FROM ads ORDER BY id DESC");
  $row= mysqli_num_rows($result);

echo "<div class='container'>";
  echo "<h3 style='color:tomato;'> <br> Ads management</h3>";
  echo "Total ads available: " .$row;
  echo "<br><br>";
  echo "<table class='table table-bordered table-responsive'>";
  echo "<tr align='center'>";

  //echo "<th>S.No </th>";
  echo "<th>Book Name</th>";
  echo "<th>Writer Name</th>";
  echo "<th>Price</th>";
  echo "<th>Description</th>";
  echo "<th>Genre</th>";
  echo "<th>Cover image</th>";
  echo "<th>Delete Ad</th>";
  echo "</tr>";


  $i=0;
  while ($retrive=mysqli_fetch_array($result)) {
    $id=$retrive['id'];
    $var_book_name=$retrive['book_name'];
    $var_writer_name=$retrive['writer'];
    $var_price=$retrive['price'];
    $var_description=$retrive['description'];
    $var_img=$retrive['image'];
    $var_genre=$retrive['genre'];



      echo "<tr align='center'>";
      //echo "<th>".$i=$i+1;"</th>";
      echo "<th>$var_book_name</th>";
      echo "<th>$var_writer_name</th>";
      echo "<th>$var_price</th>";
      echo "<th>$var_description</th>";
      echo "<th>$var_genre</th>";
      echo "<th><img src='$var_img' width='150px'</th>";
      
      echo "<th><a href='admin-delete/areyousureAd.php?del=$id'><button class='btn btn-danger' > Delete Ad </button></a></th>";

  }


  echo "<a style='background-color: #42f59e; color: white; padding: 10px 21px; text-align: center; text-decoration: none; display: inline-block;' href='admin-post-management.php'><b>Post management</b></a>&ensp;&ensp;";
  echo "<a style='background-color: #42f59e; color: white; padding: 10px 21px; text-align: center; text-decoration: none; display: inline-block;' href='admin-panel.php'><b>User management</b></a>&ensp;&ensp;";

  echo "<a style='background-color: #fc4903; color: white; padding: 10px 21px; text-align: center; text-decoration: none; display: inline-block;' href='includes/handlers/admin-logout.php'><b>Logout</b></a>";






}


else {
  header("location:admin.php");
}


 ?>