<?php
include("amenu.php");
include("cookie.php");
$conn = mysqli_connect("localhost", "root", "", "lnf"); //Database Connection
?>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>"
</head>

<main>
    <h2>Manage Admin</h2>
    <br>

    <?php
    $rows = mysqli_query($conn, "SELECT * FROM found_items");
    $i = 1;
    ?>

    <table class="tbl-full">
        <tr>
            <th>S.N.</th>
            <th>Username</th>
            <th>Item Name</th>
            <th>Description</th>
            <th>Item Image</th>
            <th>Category</th>
            <th>Location</th>
            <th>Date</th>
            <th>Action</th>
        </tr>


        <?php foreach ($rows as $row): ?>

            <tr id=<?php echo $row["id"]; ?>>
                <td>
                    <?php echo $i++; ?>
                </td>
                <td>
                    <?php echo $row["username"]; ?>
                </td>
                <td>
                    <?php echo $row["title"]; ?>
                </td>
                <td>
                    <?php echo $row["description"]; ?>
                </td>
                <td>
                    <?php echo $row["image_name"]; ?>
                </td>
                <td>
                    <?php echo $row["category"]; ?>
                </td>
                <td>
                    <?php echo $row["location"]; ?>
                </td>
                <td>
                    <?php echo $row["date"]; ?>
                </td>
                <td>
                    <button type="button" name="button" onclick="deletedata(<?php echo $row['id']; ?>);">Delete</button>
                </td>
            </tr>

        <?php endforeach; ?>

    </table>

    <script type="text/javascript">
        // Function
        function deletedata(id) {
            $(document).ready(function () {
                $.ajax({
                    // Action
                    url: 'post_func.php',
                    // Method
                    type: 'POST',
                    data: {
                        // Get value
                        id: id,
                        action: "delete"
                    },
                    success: function (response) {
                        // Response is the output of action file
                        if (response == 1) {
                            alert("Data Deleted Successfully");
                            document.getElementById(id).style.display = "none";
                        }
                        else if (response == 0) {
                            alert("Data Cannot Be Deleted");
                        }
                    }
                });
            });
        }
    </script>
</main>