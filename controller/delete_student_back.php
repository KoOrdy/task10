<?php
require_once "connect.php";
session_start();
$id=$_GET["id"];

$sql=mysqli_query($connect,"DELETE FROM `students` WHERE `id`=$id");

if ($sql){
    $_SESSION['delete']="the student is deleted";
    header("Location:../view/students.php");
    exit();
}