<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Location</h1>

        <br><br>

        <?php 
        
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }

            if(isset($_SESSION['upload']))
            {
                echo $_SESSION['upload'];
                unset($_SESSION['upload']);
            }
        
        ?>

        <br><br>

        <!-- Add CAtegory Form Starts -->
        <form action="" method="POST" enctype="multipart/form-data">

            <table class="tbl-30">
                <tr>
                    <td>Title: </td>
                    <td>
                        <input type="text" name="title" placeholder="Category Title">
                    </td>
                </tr>

    
                <tr>
                    <td>Featured: </td>
                    <td>
                        <input type="radio" name="featured" value="Yes"> Yes 
                        <input type="radio" name="featured" value="No"> No 
                    </td>
                </tr>

                <tr>
                    <td>Active: </td>
                    <td>
                        <input type="radio" name="active" value="Yes"> Yes 
                        <input type="radio" name="active" value="No"> No 
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Location" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form>
   

        <?php 
        
            
            if(isset($_POST['submit']))
            {
                
                $title = $_POST['title'];

            
                if(isset($_POST['featured']))
                {
                  
                    $featured = $_POST['featured'];
                }
                else
                {
                    $featured = "No";
                }

                if(isset($_POST['active']))
                {
                    $active = $_POST['active'];
                }
                else
                {
                    $active = "No";
                }

              
                $sql = "INSERT INTO tbl_location SET 
                    title='$title',
                    featured='$featured',
                    active='$active'
                ";

              
                $res = mysqli_query($conn, $sql);

               
                if($res==true)
                {
                   
                    $_SESSION['add'] = "<div class='success'>Category Added Successfully.</div>";
                    header('location:'.SITEURL.'admin/manage-location.php');
                }
                else
                {
                    
                    $_SESSION['add'] = "<div class='error'>Failed to Add Category.</div>";
                    header('location:'.SITEURL.'admin/add-location.php');
                }
            }
        
        ?>

    </div>
</div>

