<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>

    <?php
        $conn2 = mysqli_connect("localhost", "root", "", "crud_php") or die("Connection failed for edit!");
        $stu_id = $_GET['id'];
        $sql2 = "SELECT * FROM student WHERE sid = {$stu_id}";
    
        $result2 = mysqli_query($conn2, $sql2) or die("connection failed from edit query!"); 
        
        if(mysqli_num_rows($result2) > 0) { 
            while($row = mysqli_fetch_assoc($result2)) { 
    ?>
    <form class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="hidden" name="sid" value="" />
            <input type="text" name="sname" value="" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" value="" />
        </div>
        <div class="form-group">
            <label>Class</label>
            <select name="sclass">
                <option value="" selected disabled>Select Class</option>
                <option value="1">BCA</option>
                <option value="2">BSC</option>
                <option value="3">B.TECH</option>
            </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" value="" />
        </div>
        <input class="submit" type="submit" value="Update" />
    </form>
    <?php 
            }
        }
    ?>
</div>
</div>
</body>

</html>