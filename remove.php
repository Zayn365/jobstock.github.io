<?php
include('connect.php');
session_start();
$appname = $_GET['appname'];
$appid = $_GET['appid'];
$query = "DELETE FROM `application` WHERE appid = '$appid' AND appname = '$appname'";
$result = mysqli_query($con, $query);

if ($result) {
    header('location:viewapplication.php');
} else {
    echo "NOT REMOVED";
}
?>