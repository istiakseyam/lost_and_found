<?php include('constants.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UFT-8">
    <title>Lost & Found</title>
    <link rel="icon" type="image/x-icon" href="icon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="stylehome.css">
    <link rel="stylesheet" href="stylenavside.css">
    <link rel="stylesheet" href="stylepost.css">

</head>


<input type="checkbox" id="nav-toggle">
<div class="sidebar">
    <div class="sidebar-brand">
        <span>
            <a href="home.php"><img src="logo.png" width="220px" alt="Lost and Found"></a>
        </span>
    </div>

    <div class="sidebar-menu">
        <ul>
            <li>
                <a href="manage-item.php">
                    <span class="icon"><i class="fas fa-home"></i></span>
                    <span class="item">Home</span>
                </a>
            </li>
            <li>
                <a href="post.php">
                    <span class="icon"><i class="fas fa-file"></i></span>
                    <span class="item">Post Items</span>
                </a>
            </li>
            <li>
                <a href="sale.php">
                    <span class="icon"><i class="fas fa-shopping-basket"></i></span>
                    <span class="item">Items for Sale</span>
                </a>
            </li>
            <li>
                <a href="claim.php">
                    <span class="icon"><i class="fas fa-exclamation"></i></span>
                    <span class="item">My Claims</span>
                </a>
            </li>
        </ul>
    </div>
</div>


<div class="main-content">
    <header>
        <h2>
            <label for="nav-toggle">
                <span class="las la-bars"></span>
            </label>
        </h2>

        <div class="search">
            <form action="" method="GET">
                <input type="text" placeholder="Search..." value="<?php if (isset($_GET['search'])) {
                    echo $_GET['search'];
                } ?>" name="search" id="search" />
                <button type="submit">Search</button>
            </form>
        </div>


        <div class="user">
            <ul>
                <li>
                    <a href="user.php">
                        <i class="fas fa-user"></i>
                        <?php if (isset($_SESSION['username'])): ?>
                            <a>Welcome <strong>
                                    <?php echo $_SESSION['username']; ?>
                                </strong></a>
                        <?php endif ?>
                    </a>
                </li>
                <li>
                    <a href="login.php?logout='1'" style="color: red;">logout</a>
                    <i class="fas fa-arrow-right"></i>
                    </a>
                </li>
            </ul>
        </div>

    </header>
    </body>

</html>