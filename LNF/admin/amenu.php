<?php 

include('../config/constants.php'); 
include('login-check.php');
  

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Head Icon -->
    <link rel="icon" type="image/x-icon" href="icon.png" />
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <!-- CSS File -->
    <link rel="stylesheet" href="../css/stylenavside.css" />
    <link rel="stylesheet" href="../css/stylepost.css" />
    <link rel="stylesheet" href="../css/stylehome.css" />
    <link rel="stylesheet" href="../css/styleitemdetail.css" />


    <title>Lost & Found</title>
</head>

<body>
    <input type="checkbox" id="nav-toggle">

    <header>
        <label for="nav-toggle" class="menu">
            <i class="material-icons">menu</i>
        </label>

        <div class="logo">
            <img src="logo.png">
        </div>

        <div class="search">
            <form action="">
                <input type="text" placeholder="Search..." />
                <button><i class="material-icons">search</i></button>
            </form>
        </div>

        <div class="icons-right">
            <a href="#">
                <i class="material-icons">notifications</i>
            </a>
            <a href="user.php">
                <i class="material-icons display-this">account_circle</i>
            </a>
            <a href="login.php">
                <i class="material-icons display-this">logout</i>
            </a>
        </div>
    </header>


    <div class=”side-bar”>
        <div class="nav">
            <a href="index.php" class="nav-link">
                <i class="material-icons">home</i>
                <span>Home</span>
            </a>
            <a href="post_list.php" class="nav-link">
                <i class="material-icons">app_registration</i>
                <span>Post List</span>
            </a>
            <a href="user_list.php" class="nav-link">
                <i class="material-icons">sell</i>
                <span>User List</span>
            </a>
            <a href="add-admin.php" class="nav-link">
                <i class="material-icons">subscriptions</i>
                <span>Add Admin</span>
            </a>
            <a href="manage-admin.php" class="nav-link">
                <i class="material-icons">subscriptions</i>
                <span>Manage Admin</span>
            </a>
        </div>
    </div>
    <!-- </div> -->
    </div>
    <!-- Main Body Ends -->

</body>

</html>