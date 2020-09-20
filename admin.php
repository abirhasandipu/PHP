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
  
  $msg = ''; $msg2 = '';

  if (isset($_POST['submit'])) {
    $var_name = $_POST['form_name'];
    $var_password = $_POST['form_password'];

    if (empty($var_name)) {
      $msg = '<div class="error"> Please enter user name. </div>';
    }
    else if (empty($var_password)) {
      $msg2 = '<div class="error"> Please enter your password. </div>';
    }
    else{
      $pass = mysqli_query($con, "SELECT admin_password FROM admin WHERE admin_name='$var_name'");
      $pass1 = mysqli_fetch_array($pass);
      $pass2 = $pass1['admin_password'];


      if ($var_password !== $pass2) {
        $msg2 = '<div class="error"> Wrong Username or Password. </div>';
      }
      else {
        $_SESSION['form_name'] = $var_name;
        header("location:admin-panel.php");
      }
    }
  }




 ?>


 <title> Admin Login </title>
 <style type="text/css">

  #body-bg{
    background: url("assets/images/random_image/spb.jpg");
  }

  .error{
    color: red;
  }
 </style>
</head>

<body id="body-bg">
  <div class="container">
    <div class="login-form col-md-4 offset-md-4">
      <div class="jumbotron" style="margin-top:50px;">

        <h3 align='center'>Admin Login</h3><br>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
          <div class="form-group">
            <input type="text" name="form_name" class="form-control" placeholder="User Name">
            <?php echo $msg; ?> <br>
          </div>

            <div class="form-group">
              <input type="password" name="form_password" class="form-control" placeholder="Password">
              <?php echo $msg2; ?> <br>
            </div>

            <br>

            <center> <input type="submit" name="submit" value="Login" class="btn btn-info"> </center>

        </form>

      </div>

    </div>

  </div>
</body>
