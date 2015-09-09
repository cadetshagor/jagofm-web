<?php
$db_user='root';
$db_pass='';
$db_name='jago'; 
$conn= mysqli_connect('localhost',$db_user,$db_pass,$db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>