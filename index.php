<?php
session_start();
include 'header.php';
?>
<div id="main-content">
    <h2>All Student Records</h2>

    <?php 
    $conn = mysqli_connect( "localhost", "root", "", "crud_php") or die("Connection failed!");

    $sql = "SELECT * FROM student JOIN studentclass WHERE student.sclass = studentclass.cid";

    $result = mysqli_query( $conn, $sql) or die("Error From Query!");

    if(mysqli_num_rows($result) > 0) { 
    
    ?>
    <table cellpadding="7px">
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Address</th>
            <th>Class</th>
            <th>Phone</th>
            <th>Action</th>
        </thead>
        <tbody>

            <?php 
                $i=1;
                while( $row = mysqli_fetch_assoc($result) ) { 
            ?>

            <tr>

                <td> <?php echo $i++; ?> </td>
                <td> <?php echo $row['sname']; ?> </td>
                <td> <?php echo $row['saddress']; ?> </td>
                <td> <?php echo $row['cname']; ?> </td>
                <td> <?php echo $row['sphone']; ?> </td>
                <td>
                    <form id="myForm" method="post">
                        <a href="edit.php?id=<?php echo $row['sid']; ?> ">Edit</a>
                        <a href="delete-inline.php?id=<?php echo $row['sid']; ?> ">Delete</a>
                    </form>
                </td>
            </tr>

            <?php 
                }
            ?>

        </tbody>
    </table>
    <?php 
    }else {
        echo "<h2> No records found!..</h2>";
    }
    mysqli_close($conn);

        if (isset($_SESSION['success_msg'])) {
        $success_msg = $_SESSION['success_msg'];
    // Display the success message to the user
        echo $success_msg;
    // Unset the session variable to prevent displaying the message again
        unset($_SESSION['success_msg']);
        }

    ?>
</div>
</div>
</body>

</html>