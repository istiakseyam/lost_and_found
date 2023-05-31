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

    <main>
      <h1>Who are you?</h1>
      <a href="login.php">
        <button>General User</button>
    </a>
    <a href="alogin.html">
      <button>Admin</button>
  </a>
    </main>
    </div>

    <footer>
      <p>All Rights Reserved ~ Designed by Group 08</p>
    </footer>

</body>

</html>