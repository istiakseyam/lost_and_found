<?php

$conn = mysqli_connect("localhost", "root", "", "lnf") or die(mysqli_error()); //Database Connection

$sql = "SELECT * FROM found_items WHERE title LIKE '%" . $_POST['name'] . "%' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
   while ($row = mysqli_fetch_assoc($result)) {
      echo " <tr>
      <td>" . $row['id'] . "</td>
      <td>" . $row['username'] . "</td>
      <td>" . $row['title'] . "</td>
      <td>" . $row['description'] . "</td>
      <td>" . $row['image_name'] . "</td>
      <td>" . $row['category'] . "</td>
      <td>" . $row['location'] . "</td>
      <td>" . $row['date'] . "</td>
      </tr>";
   }
} else {
   echo "<tr><td>0 results found</td></tr>";
}
?>