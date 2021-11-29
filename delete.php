<?php
 include('connect.php');
 $id = $_GET['catid'];
 $name=$_GET['catname'];
 $querydel = "DELETE FROM `categories` WHERE catid=$id";
 $result = mysqli_query($con,$querydel);
 if($result){
     header ('location:categories.php');
 }
 else {
     echo "NOT REMOVED";
 }
?>