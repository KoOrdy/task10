<?php
$localhost='localhost';
$username='root';
$password='';
$db_name='students';

$connect=mysqli_connect($localhost,$username,$password,$db_name);

if(!$connect){
    echo mysqli_connect_error();
}