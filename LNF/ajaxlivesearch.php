<?php include('constants.php'); ?>


<?php

 $search_value = $_POST["search"];

 $sql = "SELECT * FROM found_items WHERE title LIKE '%{search_value}%' OR
  description LIKE '%{search_value}%' OR location LIKE '%{search_value}%'";
 
 $result = mysqli_query($conn, $sql) or die("SQL Query Failed.");

 $output = "";

 if(mysqli_num_rows($result) > 0){
    $output = '<table border="1" width="100%" cellscaping="0 cellpadding="10px">
               <tr>
               <th width="60px">ID</th>
               <th>Title</th>
               <th>Description</th>
               <th>Location</th>
               </tr>  '; 

               while($row = mysqli_fetch_assoc($result)){
                  $output .= "<td><td align = 'center'>{$row["id"]}</td></td>
                              {$row["title"]}</td></td>{$row["description"]}</td></td>
                              {$row["location"]}
               }

               $output .= "</table>";

               mysqli_close($conn);

               echo $output;
            }else{
               echo "<h4>error.</h4>";
            }
 

       }




?>