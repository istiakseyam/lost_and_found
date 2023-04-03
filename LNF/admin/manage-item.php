<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Manage Item</h1>

        <br /><br />

                <!-- Button to Add Admin -->
                <a href="<?php echo SITEURL; ?>admin/add-item.php" class="btn-primary">Post Item</a>

                <br /><br /><br />

                <?php 
                    if(isset($_SESSION['add']))
                    {
                        echo $_SESSION['add'];
                        unset($_SESSION['add']);
                    }

                    if(isset($_SESSION['delete']))
                    {
                        echo $_SESSION['delete'];
                        unset($_SESSION['delete']);
                    }

                    if(isset($_SESSION['upload']))
                    {
                        echo $_SESSION['upload'];
                        unset($_SESSION['upload']);
                    }

                    if(isset($_SESSION['unauthorize']))
                    {
                        echo $_SESSION['unauthorize'];
                        unset($_SESSION['unauthorize']);
                    }

                    if(isset($_SESSION['update']))
                    {
                        echo $_SESSION['update'];
                        unset($_SESSION['update']);
                    }
                
                ?>

                <table class="tbl-full">
                    <tr>
                        <th>S.N.</th>
                        <th>Item Name</th>
                        <th>Description</th>
                        <th>Select Item Image</th>
                        <th>Date</th>
                        <th>Featured</th>
                        <th>Active</th>
                        <th>Actions</th>

                      
                    </tr>

                    <?php 
                      
                        $sql = "SELECT * FROM tbl_item";

                 
                        $res = mysqli_query($conn, $sql);
                        $count = mysqli_num_rows($res);

                       
                        $sn=1;

                        if($count>0)
                        {
                           
                            while($row=mysqli_fetch_assoc($res))
                            {
                               
                                $id = $row['id'];
                                $title = $row['title'];
                                $description = $row['description'];
                                $image_name = $row['image_name'];
                                $date = $row['date'];
                                $featured = $row['featured'];
                                $active = $row['active'];
                              


                                ?>

                                <tr>
                                    <td><?php echo $sn++; ?>. </td>
                                    <td><?php echo $title; ?></td>
                                    <td><?php echo $description; ?></td>
                                    <td>
                                        <?php  
                                           
                                            if($image_name=="")
                                            {
                                               
                                                echo "<div class='error'>Image not Added.</div>";
                                            }
                                            else
                                            {
                                               
                                                ?>
                                                <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" width="100px">
                                                <?php
                                            }
                                        ?>
                                    </td>
                                       <td><?php echo $date,"Y/m/d ";; ?></td>
                                    <td><?php echo $featured; ?></td>
                                    <td><?php echo $active; ?></td>
                                  
                                 
                                 
                                    
                                    
                                 
                                    <td>
                                        <a href="<?php echo SITEURL; ?>admin/update-item.php?id=<?php echo $id; ?>" class="btn-secondary">Update Food</a>
                                        <a href="<?php echo SITEURL; ?>admin/delete-item.php?id=<?php echo $id; ?>&image_name=<?php echo $image_name; ?>" class="btn-danger">Delete Food</a>
                                    </td>
                                </tr>

                                <?php
                            }
                        }
                        else
                        {
                           
                            echo "<tr> <td colspan='7' class='error'> Item not Added Yet. </td> </tr>";
                        }

                    ?>

                    
                </table>
    </div>
    
</div>

