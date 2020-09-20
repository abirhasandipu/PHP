<?php 
include("includes/header.php");

$var_name = $_SESSION['username'];


$con = mysqli_connect("localhost", "root", "", "social"); 
if(mysqli_connect_errno()) 
{
  echo "Failed to connect: " . mysqli_connect_errno();
}


if(isset($_GET['i'])){
	$id=$_GET['i'];

  $result= mysqli_query($con, "SELECT * FROM ads WHERE $id=id");



  $i=0;
  while ($retrive=mysqli_fetch_array($result)) {
  //$id=$retrive['id'];
  $var_book_name=$retrive['book_name'];
  $var_writer_name=$retrive['writer'];
  $var_price=$retrive['price'];
  $var_description=$retrive['description'];
  $var_img=$retrive['image'];
  $var_genre=$retrive['genre'];

  $contact_seller=$retrive['added_by'];

}

}


?>

<div class="book_details">
	<h3><?php echo $var_book_name; ?></h3>
	<img class="book_image" src='<?php echo $var_img ?>'>
	<div class="book_description">
		<h6 style="color: green;">Genre: <?php echo $var_genre ?></h6>
		<h6 style="color: tomato;">Price: <?php echo $var_price ?> </h6>
		<h6 style="color: green;">Description and Condition: <?php echo $var_description ?> </h6>
	</div>

	<div class="rating">
		<p ></p>
	</div>

	<?php echo "<th><a class='message_seller' href='messages.php?u=$contact_seller'><button class='btn btn-info' > Message Seller </button></a></th>"; ?>

</div>

	<br><br>
	<h4><a href='ads.php'> << Go back to ads page</a></h4>
	<br><br>
	<br><br>