<?php 
session_start();

$stu_id = $_POST['sid'];
$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class = $_POST['sclass'];
$stu_phone = $_POST['sphone'];

$conn3 = mysqli_connect("localhost", "root", "", "crud_php") or die("Connection failed from update data!");

$sql3 = "UPDATE student SET sname = '{$stu_name}', saddress = '{$stu_address}', sclass = '{$stu_class}', sphone = '{$stu_phone}' WHERE sid = {$stu_id} ";

$result3 = mysqli_query($conn3, $sql3) or die("Query Unsuccessful from update data!");

header("Location: http://localhost/crud_PHP/index.php");


$_SESSION['success_msg'] = 'Your Update successfully Set!';

mysqli_close($conn3);

?>