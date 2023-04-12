
<?php include('partials/menu.php'); ?>

        <div class="main-content">
            <div class="wrapper">
                <h1> Admin Dashboard</h1>
                <br><br>
                <?php 
                    if(isset($_SESSION['login']))
                    {
                        echo $_SESSION['login'];
                        unset($_SESSION['login']);
                    }
                ?>
             
             <div class="items">

<div class="product">
  <h1>3,543</h1>
  <h3>Total posts</h3>
</div>

<div class="product">
  <h1>398</h1>
  <h3>Spam reports</h3>
</div>

<div class="product">
  <h1>1,033</h1>
  <h3>Claimed Items</h3>
</div>

</div>
</div>
</main>

</div>
              

                <div class="clearfix"></div>

          

