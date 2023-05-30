
<?php include('menu.php'); ?>

<!-- fOOD sEARCH Section Starts Here -->
<div class="main-content">
 
    

		<?php 

			//Get the Search Keyword
			// $search = $_POST['search'];
			$search = mysqli_real_escape_string($conn, $_POST['search']);
		
		?>
		<br><br><br>


		<h2>Item Your Search<a href="#" class="text-white">"<?php echo $search; ?>"</a></h2>

	

<br>
<table class="tbl-full">
                    <tr>
                        <th>S.N.</th>
                        <th>Username</th>
                        <th>Item Name</th>
                        <th>Description</th>
                        <th>Select Item Image</th>
                        <th>category</th>
                        <th>location</th>
                        <th>Date</th>
                        <th>Claim</th>
                        <th>Spam</th>

                      
                        
                      
                    </tr>
		<?php 

			$sql = "SELECT * FROM found_items WHERE title LIKE '%$search%' OR location LIKE '%$search%'";
			$res = mysqli_query($conn, $sql);
			$sn=1;
			$count = mysqli_num_rows($res);

			
			if($count>0)
			{
			
				while($row=mysqli_fetch_assoc($res))
				{
					//Get the details
					$id = $row['id'];
					$username = $row['username'];
					$title = $row['title'];
					$description = $row['description'];
					$image_name = $row['image_name'];
					$category = $row['category'];
					$location = $row['location'];
					$date = $row['date'];
					?>



<tr>
	<td><?php echo $sn++; ?>. </td>
	<td><?php echo $username; ?></td>
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
				<img src="<?php echo SITEURL; ?>image/<?php echo $image_name; ?>" width="100px">
				<?php
			}
		?>
	</td>
	<td><?php echo $category; ?></td>
	<td><?php echo $location; ?></td>
	<td><?php echo $date,"Y/m/d ";; ?></td>  
   <td> <button type="submit" name="submit" value="Post Item" class="btn-primary" style= "width:90px">Claim</button> </td>
   <td> <button type="submit" name="submit" value="Post Item" class="btn-primary" style= "width:90px">Spam</button> </td> 
	
<?php
}
}
else
{

echo "<tr> <td colspan='7' class='error'> Search Result not found Yet. </td> </tr>";
}

?>


</table>
</div>

</div>

		

	

		

	