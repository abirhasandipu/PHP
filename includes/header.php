<?php  
require 'config/config.php';
include("includes/classes/User.php");
include("includes/classes/Post.php");
include("includes/classes/Message.php");


if (isset($_SESSION['username'])) {
	$userLoggedIn = $_SESSION['username'];
	$user_details_query = mysqli_query($con, "SELECT * FROM users WHERE username='$userLoggedIn'");
	$user = mysqli_fetch_array($user_details_query);
}
else {
	header("Location: register.php");
}

?>

<html>
<head>
	<title>BookMart</title>

	<!-- Javascripts --->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/bootbox.min.js"></script>
	<script src="assets/js/demo.js"></script>
	<script src="assets/js/jquery.Jcrop.js"></script>
	<script src="assets/js/jcrop_bits.js"></script>


	<!-- CSS --->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/jquery.Jcrop.css">

</head>
<body>

	<div class="top_bar">
		<div class="logo">
			<a href="index.php"><b>BookMart</b></a>
			
		</div>


		<div class="search">

			<form action="search.php" method="GET" name="search_form">
				<input type="text" onkeyup="getLiveSearchUsers(this.value, '<?php echo $userLoggedIn; ?>')" name="q" placeholder="Search people..." autocomplete="off" id="search_text_input">

				<div class="button_holder">
					<img src="assets/images/icons/magnifying_glass.png">
				</div>

			</form>

			<div class="search_results">
			</div>

			<div class="search_results_footer_empty">
			</div>

		</div>


		<nav>
			<a href="<?php echo $userLoggedIn; ?>">
				<?php echo $user['first_name'] ?>
			</a>
			<a href="index.php">
				<i class="fa fa-home fa-lg">H</i>
			</a>
			<a href="messages.php">
				<i class="fa fa-envelope fa-lg">M</i>
			</a>

			<a href="requests.php">
				<i class="fa fa-users fa-lg">R</i>
			</a>

			<a href="ads.php">
				<i class="fa fa-bullhorn fa-lg">A</i>
			</a>

			<a href="includes/handlers/logout.php">
				<i class="fa fa-sign-out fa-lg">L</i>
			</a>
		</nav>
		
	</div>
	

	<div class="wrapper">
		