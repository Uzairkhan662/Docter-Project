<?php

include 'conect.php';



$sql = "delete from registration";

$rs = mysqli_query($conn,$sql);

if($rs === TRUE){
    echo "<script>alert('record deleted');</script>";
    echo "<script>window.location.href='register.php';</script>";
  } else {
    echo "<script>alert('record not deleted " . mysqli_error($conn) . "');</script>";
  }
?>