<?php 
session_start();

$stu_id = $_GET['id'];

    $conn5 = mysqli_connect( "localhost", "root", "", "crud_php") or die("Connection failed from delete!");

    $sql5 = "DELETE FROM student WHERE sid = {$stu_id}";

    if(mysqli_query($conn5, $sql5)) {
        $_SESSION['success_msg'] = 'Your Data Delete successfully!';
    } else {
        echo "Error: " . $sql5 . "<br>" . mysqli_error($conn5). "from delete";
    }

    //$result5 = mysqli_query( $conn5, $sql5) or die("Error From Query delete!");

    header("Location: http://localhost/crud_PHP/index.php");

    mysqli_close($conn5);
?>