<?php
session_start();
include('db_conn.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UFT-8" />
    <title>Lost & Found</title>
    <link rel="icon" type="image/x-icon" href="icon.png" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    />
    <link
      rel="stylesheet"
      href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css"
    />
    <link rel="stylesheet" href="style.css" />
    <script src="login.js"></script>
  </head>

  <body>
    <div class="container">
      <nav>
        <a href="index.html"
          ><img src="logo.png" alt="lost and found" class="logo"
        /></a>
        <ul>
          <li><a href="#">HOME</a></li>
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

      <div class="login">
        <form
          name="login"
          action="home.html"
          method="post"
          onsubmit="return lform()"
        >
          <h1>Login</h1>
          <p>Please fill in this form to access your account</p>

          <label for="email"></label>
          <input type="email" placeholder="Email" name="email" id="email" />

          <label for="password"></label>
          <input
            type="password"
            placeholder="Password"
            name="password"
            id="password"
          />

          <a href="home.php">
            <button>Login</button>
          </a>
          <p>New user? 
            <a href="signup.php">SIGNUP</a></p>
        </form>
      </div>
    </div>

    <footer>
      <p>All Rights Reserved ~ Designed by Group 08</p>
    </footer>
  </body>
</html>
