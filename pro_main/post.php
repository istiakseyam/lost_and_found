<?php
require_once 'includes/db_conn.php';
 //$sql = "SELECT * FROM dash";

 //$result = mysqli_query($conn,$sql);
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
  <link rel="stylesheet" href="stylenavside.css" />
  <link rel="stylesheet" href="stylehome.css">
  <link rel="stylesheet" href="stylepost.css" />
</head>

<body>
  <div class="container">
    <aside>
      <img src="logo.png" alt="lost and found" class="logo" />

      <div class="sidebar">
        <ul>
          <li class="=active">
            <a href="home.html"><i class="fas fa-home"></i>Home</a>
          </li>
          <li>
            <a href="post.html"><i class="fas fa-file"></i>Post Item</a>
          </li>
          <li>
            <a href="sale.html"><i class="fas fa-shopping-basket"></i>Items for Sale</a>
          </li>
          <li>
            <a href="claim.html"><i class="fas fa-exclamation"></i>My Claims</a>
          </li>
        </ul>
      </div>
    </aside>

    <header>
      <h2>
        <label for="nav-toggle">
          <span class="las la-bars"></span>
        </label>
      </h2>

      <div class="search">
        <form action="#">
          <i class="fas fa-search"></i>
          <input type="search" placeholder="Search here" />
        </form>
      </div>

      <div class="user">
        <ul>
          <li>
            <a href="user.html">
              <i class="fas fa-user"></i>
            </a>
          </li>
          <li>
            <a href="start.html">
              <i class="fas fa-arrow-right"></i>
            </a>
          </li>
        </ul>
      </div>
    </header>

    <main>
      <h2>Post your item</h2>

      <form action="includes/db_post.php" method="post">

        <label for="img">Select image to upload:</label>
        <input type="file" placeholder="Select image to upload:" name="fileToUpload" id="fileToUpload"  />
        

        <label for="item">Item Type: </label>
        <select name="item" id="item">
          <option value="abstract">Abstract</option>
          <option value="documents">Documents</option>
          <option value="others">Others</option>
        </select>

        <label>Date-Time: </label>
        <input type="datetime-local" id="datetime" name="date">

        <label>Location: </label>
        <select name="location" id="location">
          <option value="Plaza">Plaza</option>
          <option value="Canteen">Canteen</option>
          <option value="Admin Building">Admin Building</option>
          <option value="Boys Lounge">Boys Lounge</option>
          <option value="Girls Lounge">Girls Lounge</option>
          <option value="SAC Classroom">SAC Classroom</option>
          <option value="NAC Classroom">NAC Classroom</option>
        </select>

        <label>Description: </label>
        <input style="height: 150px; font-size: 12pt" ..... type="text" name="description"
          placeholder="i.e, This product is from... " />
        <br>
        <button type="submit">Post</button>
    </main>

  </div>


</body>

</html>