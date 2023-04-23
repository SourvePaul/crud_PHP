<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Student Records</h2>

    <?php 
    $conn = mysqli_connect( "localhost", "root", "", "crud_php") or die("Connection failed!");

    $sql = "SELECT * FROM student JOIN studentclass WHERE student.sclass = studentclass.cid";

    $result = mysqli_query( $conn, $sql) or die("Error From Query!");
    
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
            <tr>
                <td>1</td>
                <td>Ramesh</td>
                <td>Delhi</td>
                <td>BCA</td>
                <td>9876543210</td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>

            <td>5</td>
            <td>Rohit</td>
            <td>Delhi</td>
            <td>BCA</td>
            <td>9876543210</td>
            <td>
                <a href='edit.php'>Edit</a>
                <a href='delete-inline.php'>Delete</a>
            </td>
            </tr>
        </tbody>
    </table>
</div>
</div>
</body>

</html>