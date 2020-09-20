<?php
include("../../config/config.php");
include("../../includes/classes/User.php");

$query = $_POST['query'];
$userLoggedIn = $_POST['userLoggedIn'];

$names = explode(" ", $query);

if(strpos($query, '_') !== false) 
	$booksReturnedQuery = mysqli_query($con, "SELECT * FROM ads WHERE book_name LIKE '$query%' LIMIT 15");
else
	$booksReturnedQuery = mysqli_query($con, "SELECT * FROM ads WHERE book_name LIKE '$names[0]%' OR writer LIKE '$names[0]%' LIMIT 15");


if($query != ""){

	while($row = mysqli_fetch_array($booksReturnedQuery)) {
		$user = new User($con, $userLoggedIn);


		echo "<div class='resultDisplayBooks'>
				<a href='" . $row['book_name'] . "' style='color: #1485BD'>
					<div class='liveSearchBookImage'>
						<img src='" . $row['image'] ."'>
					</div>

					<div class='liveSearchTextBooks'>
						" . $row['book_name'] . " by " . $row['writer'] . "
						<br><br>
						<p> Price: " . $row['price'] ."</p>
					</div>
				</a>
				</div>";

	}

}

?>