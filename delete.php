<?php 
session_start();
include 'header.php'; 

if(isset($_POST['deletebtn'])) {

    $stu_id = $_POST['sid'];

    $conn5 = mysqli_connect( "localhost", "root", "", "crud_php") or die("Connection failed from delete2!");

    $sql5 = "DELETE FROM student WHERE sid = {$stu_id}";

    if(mysqli_query($conn5, $sql5)) {
        $_SESSION['success_msg'] = 'Your Data Delete successfully!';
    } else {
        echo "Error: " . $sql5 . "<br>" . mysqli_error($conn5). "from delete2";
    }

    //$result5 = mysqli_query( $conn5, $sql5) or die("Error From Query delete!");

    header("Location: http://localhost/crud_PHP/index.php");

    mysqli_close($conn5);
}
?>


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>

</html>