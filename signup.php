<?php
include('db_conn.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UFT-8" />
  <title>Lost & Found</title>
  <link rel="icon" type="image/x-icon" href="icon.png" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" />
  <link rel="stylesheet"
    href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" />
  <link rel="stylesheet" href="style.css" />
  <script src="signup.js"></script>
</head>

<body>
  <div class="container">
    <nav>
      <a href="index.html"><img src="logo.png" alt="lost and found" class="logo" /></a>
      <ul>
        <li><a href="index.html">HOME</a></li>
        <li><a href="#">ABOUT</a></li>
        <li><a href="#">SERVICES</a></li>
        <li><a href="#">CONTACT US</a></li>
      </ul>
      <div class="search">
        <form action="#">
          <input type="search" placeholder="Search..." name="search" />
          <i class="fa fa-search"></i>
        </form>
      </div>
    </nav>


    <div class="signup">
      <form name="signup" action="login.php" method="post" onsubmit="return sform()">
        <h1>Create Account</h1>
        <p>Please fill in this form to create an account</p>

        <label for="name"></label>
        <input type="text" placeholder="Name" name="name" id="name" />

        <label for="email"></label>
        <input type="email" placeholder="Email" name="email" id="email" />

        <label for="phone"></label>
        <input type="text" placeholder="Contact no." name="phone" id="phone" />

        <label for="nid"></label>
        <input type="text" placeholder="NID" name="nid" id="nid" />

        <label for="password"></label>
        <input type="password" placeholder="Password" name="password" id="password" />

        <label for="password2"></label>
        <input type="password" placeholder="Confirm Password" name="password2" id="password2" />

        <a href="login.php">
          <button type="submit" name="submit" value="signup">Signup</button>
      </a>

        <p>Already have account? <a href="login.php">LOGIN</a></p>
      </form>
    </div>
  </div>

  <footer>
    <p>All Rights Reserved ~ Designed by Group 08</p>
  </footer>
</body>
</html>


<?php
if(isset($_POST['submit']))
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $nid = $_POST['nid'];
  $password = $_POST['password'];
  
  
      $sql = "INSERT INTO signup VALUES('', '$name','$email','$phone','$nid','$password')";
      
      if(mysqli_query($conn, $sql)){
              echo "Successful!!!";
          } else{
              echo "ERROR!!!". mysqli_error($conn);
          }
}          
?>


