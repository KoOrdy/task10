<?php
require_once "connect.php";
session_start();

$id=$_GET["id"];

if($_SERVER['REQUEST_METHOD']=='POST'){
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $phone=$_POST['phone'];
    if (isset($_FILES['image'])) {
        $imgTem = $_FILES['image']['tmp_name'];
        $imgName = $_FILES['image']['name'];
        move_uploaded_file($imgTem, '../images/' . $imgName);
        $newPath = '../images/' . $imgName;
    }
    $sql=mysqli_query($connect,"UPDATE `students` SET `first_name`='$first_name',`last_name`='$last_name',`phone`='$phone',`image`='$newPath' WHERE `id`=$id");
    if($sql){
        $_SESSION['update']='the student update successful';
        header("Location:../view/students.php");
        exit();
    }
    
}