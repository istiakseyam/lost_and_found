<?php 

$serverName = "localhost";
$dbUserName = "istiak";
$dbPassword = "";
$dbName = "lost_and_found";

$conn = mysqli_connect($serverName,$dbUserName,$dbPassword,$dbName);

if(!$conn){
    die("Connection Failed: ".mysqli_connect_error());
}