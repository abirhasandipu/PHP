<?php 
include("includes/header.php");

$var_name = $_SESSION['username'];

$con = mysqli_connect("localhost", "root", "", "social"); 
if(mysqli_connect_errno()) 
{
  echo "Failed to connect: " . mysqli_connect_errno();
}


if (isset($_POST['nameofbookorwriter'])) {
	$searchq = $_POST['nameofbookorwriter'];

	$result= mysqli_query($con, "SELECT * FROM ads WHERE (book_name LIKE '$searchq%' OR writer LIKE '$searchq%' OR genre LIKE '$searchq%') ");
  	$row= mysqli_num_rows($result);


	if ($row==0) {
		$output = "Could not find anything...";
	}
	else{
		  echo "<div class='container'>";
  //echo "<h3> <br> Choose a book and contact the seller!</h3>";
  //echo "Total ads available: " .$row;
  echo "<br><br>";
  echo "<table class='table table-bordered table-responsive table-striped style='background-color: white'>";
  echo "<tr align='center'>";

  //echo "<th>S.No </th>";
  echo "<th>Book Name</th>";
  echo "<th>Writer Name</th>";
  echo "<th>Price</th>";
  echo "<th>Description</th>";
  echo "<th>Genre</th>";
  echo "<th>Cover image</th>";
  echo "<th>Contact Seller</th>";
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

    $contact_seller=$retrive['added_by'];



      echo "<tr align='center'>";
      //echo "<th>".$i=$i+1;"</th>";
      echo "<th><a href='book-page.php?i=$id'>$var_book_name</a></th>";
      echo "<th>$var_writer_name</th>";
      echo "<th>$var_price</th>";
      echo "<th>$var_description</th>";
      echo "<th>$var_genre</th>";      
      echo "<th><img src='$var_img' width='100'</th>";
      
      echo "<th><a href='messages.php?u=$contact_seller'><button class='btn btn-info' > Message Seller </button></a></th>";

  }
}

}

echo "<a href='ads.php'> << Go back to ads page</a><br><br>";


 ?>