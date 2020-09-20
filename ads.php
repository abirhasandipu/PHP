<?php 
include("includes/header.php");

$var_name = $_SESSION['username'];

$con = mysqli_connect("localhost", "root", "", "social"); 
if(mysqli_connect_errno()) 
{
  echo "Failed to connect: " . mysqli_connect_errno();
}

if(isset($_POST['post'])){


  $book_name = $_POST['form_bookname']; //taking form_bookname from input and putting it in variable named book_name--dipu
  $writer_name = $_POST['form_writer'];
  $price = $_POST['form_price'];
  $description = $_POST['form_description'];
  $genre = $_POST['form_genre'];


 // echo $book_name."<br>".$writer_name."<br>".$price."<br>".$description."<br>".$genre;



  $uploadOk = 1;
  $imageName = $_FILES['fileToUpload']['name'];
  $errorMessage = "";

  if($imageName != "") {
    $targetDir = "assets/images/ads/";
    $imageName = $targetDir . uniqid() . basename($imageName);
    $imageFileType = pathinfo($imageName, PATHINFO_EXTENSION);

    if($_FILES['fileToUpload']['size'] > 40000000) {
      $errorMessage = "Sorry your file is too large";
      $uploadOk = 0;
    }

    if(strtolower($imageFileType) != "jpeg" && strtolower($imageFileType) != "png" && strtolower($imageFileType) != "jpg") {
      $errorMessage = "Sorry, only jpeg, jpg and png files are allowed";
      $uploadOk = 0;
    }

    if($uploadOk) {
      if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $imageName)) {
        //image uploaded okay
      }
      else {
        //image did not upload
        $uploadOk = 0;
      }
    }

  }


//query  --dipu

  mysqli_query($con, "INSERT INTO ads (book_name, writer, price, description, genre, added_by, date_added, image) VALUES ('$book_name', '$writer_name', '$price', '$description', '$genre', '$var_name', '', '$imageName')");
}

?>




<h3>Post advertisements</h3>


<div class="ad_form">

        <form class="post_form" action="ads.php" method="POST" enctype="multipart/form-data" autocomplete="off">

        
          <input class="ad_form_text_field" type="text" name="form_bookname" placeholder="Book name" required> <br>

          <input class="ad_form_text_field" type="text" name="form_writer" placeholder="Writer" required> <br>

          <input class="ad_form_text_field" type="text" name="form_price" placeholder="Price in taka" required> <br>

          <input class="ad_form_text_field" type="text" name="form_description" placeholder="Description and condition" required> <br> 


          <select id="genre" name="form_genre" class="ad_form_text_field">
            <option value="-">Select genre...</option>
            <option value="Fiction">Fiction</option>
            <option value="Non-fiction">Non-fiction</option>
            <option value="Autobiography">Autobiography</option>
            <option value="Adventure">Adventure</option>
            <option value="Biography">Biography</option>
            <option value="Comedy">Comedy</option>
            <option value="Thriller">Thriller</option>
            <option value="Novel">Novel</option>
            <option value="Sci-fi">Science Fiction</option>
            <option value="Self help">Self Help</option>
            <option value="Romantic">Romantic</option>
            <option value="Horror">Horror</option>
            
          </select> <br> <br>

            <input type="file" name="fileToUpload" id="fileToUpload" required> <br><br>

          <input type="submit" name="post" id="post_button" value="Post ad">
          <br>

        </form>
</div>


<div class="book_search">

    <form action="search.php" method="POST" name="search_form">
       <input type="text" name="nameofbookorwriter" placeholder="Search books..." autocomplete="off" id="search_text_input">
      <input type="submit" name="searchBooks" value="Search Books">

    </form>

</div>





<?php
//-------------The ads are from here---------dipu---------------------

//$var_name = $_SESSION['username']; 

echo "<br>";
if(isset($var_name)){

  $result= mysqli_query($con, "SELECT * FROM ads ORDER BY id DESC");
  $row= mysqli_num_rows($result);

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
  echo "<th>Book Cover</th>";
  echo "<th>Contact Seller</th>";
  echo "<th></th>";
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
    $ad_by=$retrive['added_by']; 

    $contact_seller=$retrive['added_by'];



      echo "<tr align='center'>";
      //echo "<th>".$i=$i+1;"</th>";
      echo "<th><a href='book-page.php?i=$id'>$var_book_name</a></th>";
      echo "<th>$var_writer_name</th>";
      echo "<th style='color: #eb4034'>$var_price taka</th>";
      echo "<th>$var_description</th>";
      echo "<th>$var_genre</th>";      
      echo "<th><img src='$var_img' width='100'</th>";
      
      echo "<th><a href='messages.php?u=$contact_seller'><button class='btn btn-info' > Message Seller </button></a></th>";

      if($var_name == $ad_by){
        echo "<th><a href='ad-delete-user.php?b=$id'><button class='btn btn-danger' > X </button></a></th>";
      }

  }

}

 ?>





