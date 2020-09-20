<?php
$con = mysqli_connect("localhost", "root", "", "social");
$output = '';
if(isset($_POST["nameofbookorwriter"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["nameofbookorwriter"]);
	$query = "
	SELECT * FROM ads 
	(WHERE book_name LIKE '%".$searchq."%'
	OR writer LIKE '%".$searchq."%' 
	OR genre LIKE '%".$searchq."%') 
	";
}
else
{
	$query = "
	SELECT * FROM ads ORDER BY id";
}
$result = mysqli_query($con, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>book_name</th>
							<th>writer</th>
							<th>genre</th>
							<th>price</th>
							<th>description</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["book_name"].'</td>
				<td>'.$row["writer"].'</td>
				<td>'.$row["genre"].'</td>
				<td>'.$row["price"].'</td>
				<td>'.$row["description"].'</td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>