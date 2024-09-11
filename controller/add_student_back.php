<?php
session_start();
require_once "connect.php";

if ($_SERVER['REQUEST_METHOD']=='POST'){
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $phone=$_POST['phone'];

    if (isset($_FILES['image'])) {
        $imgTem = $_FILES['image']['tmp_name'];
        $imgName = $_FILES['image']['name'];
        move_uploaded_file($imgTem, '../images/' . $imgName);
        $newPath = '../images/' . $imgName;
    }

    $sql=mysqli_query($connect,"INSERT INTO `students`(`first_name`, `last_name`, `phone`, `image`) VALUES ('$first_name','$last_name','$phone','$newPath')");
    if ($sql){
        $_SESSION["sucees"]="student added successfully";

        header("Location:../view/add_student.php");
        
        mysqli_close($connect);
        exit();
    }
}

