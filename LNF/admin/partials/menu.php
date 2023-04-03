<?php 

    include('../config/constants.php'); 
    include('login-check.php');

?>


<html>
    <head>
        <title>LNF - Admin</title>

        
        <link rel="stylesheet" href="../css/stylehome.css">
        <link rel="stylesheet" href="../css/stylenavside.css">
        <link rel="stylesheet" href="../css/admin.css">
       
        <link rel="icon" type="image/x-icon" href="icon.png">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <link rel="stylesheet"
    href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    </head>
    
    <body>
    
      <div class="sidebar">
    <div class="sidebar-brand">
      <span>
        <a href="home.html"><img src="logo.png" width="220px" alt="Lost and Found"></a>
      </span>
    </div>
  
    <div class="sidebar-menu">
      <ul>
        <li>
          <a href="index.php">
            <span class="icon"><i class="fas fa-home"></i></span>
            <span class="item">Home</span>
          </a>
        </li>
  
        <li>
          <a href="manage-item.php">
            <span class="icon"><i class="fas fa-shopping-basket"></i></span>
            <span class="item">Post Items</span>
          </a>
        </li>
        <li>
          <a href="manage-category.php">
            <span class="icon"><i class="fas fa-exclamation"></i></span>
            <span class="item">Item Category</span>
          </a>
        </li>
        <li>
          <a href="manage-location.php">
            <span class="icon"><i class="fas fa-exclamation"></i></span>
            <span class="item">Item Location</span>
          </a>
        </li>
        <li>
          <a href="manage-claim.php">
            <span class="icon"><i class="fas fa-exclamation"></i></span>
            <span class="item">Claim Items</span>
          </a>
        </li>
        <li>
          <a href="logout.php">
            <span class="icon"><i class="fas fa-arrow-right"></i></span>
            <span class="item">Logout</span>
          </a>
        </li>
      
  
       
      </ul>
    </div>
  </div>
  
  <div class="main-content">
    <header>
      <h2>
     Admin Dashboard
       
      </h2>

      

      <div class="user">
        <ul>
        <ul>
          <li>
            <a href="manage-admin.php">
              <i class="fas fa-user"> Update Profile</i>
            </a>
          </li>
        
        </ul>
      </div>
    </header>


       
         
        </ul>
      </div>
    </header>
  </body>
</html>
