<?php 
session_start();

$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class = $_POST['class'];
$stu_phone = $_POST['sphone'];

$conn2 = mysqli_connect("localhost", "root", "", "crud_php") or die("connection failed from saveData connection!");

$sql2 = "INSERT INTO student (sname, saddress, sclass, sphone) 
                    VALUES ('{$stu_name}', '{$stu_address}', '{$stu_class}', '{$stu_phone}')";

$result2 = mysqli_query( $conn2, $sql2) or die("connection failed from saveData query!");

header( "Location: http://localhost/crud_PHP/index.php");

$_SESSION['success_msg'] = 'Your New Data ADD successfully!';

mysqli_close($conn2);

?>