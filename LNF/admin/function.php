<?php
$conn = mysqli_connect("localhost", "root", "", "lnf");

if (isset($_POST["action"])) {
    // Choose a function depends on value of $_POST["action"]
    if ($_POST["action"] == "delete") {
        delete();
    }
}

function delete()
{
    global $conn;

    $id = $_POST["id"];

    $rows = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tbl_admin WHERE id = $id"));


    mysqli_query($conn, "DELETE FROM tbl_admin WHERE id = $id");
    echo 1;
}