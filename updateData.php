<?php 

$stu_id = $_POST['sid'];
$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class = $_POST['class'];
$stu_sphone = $_POST['sphone'];

$conn3 = mysqli_connect("localhost", "root", "", "crud_php") or die("Connection failed from update data!");

$sql3 = ;

$result3 = mysqli_query($conn3, $sql3) or die("Query Unsuccessful from update data!");


$mysqli_close("$conn3");

?>