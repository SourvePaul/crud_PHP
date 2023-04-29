<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>

    <?php

        $conn2 = mysqli_connect("localhost", "root", "", "crud_php") or die("Connection failed for edit!");
        
            $id = $_GET['id'];
        
        $sql2 = "SELECT * FROM student WHERE sid = {$id}";
    
        $result2 = mysqli_query($conn2, $sql2) or die("connection failed from edit query!"); 
        
        if(mysqli_num_rows($result2) > 0) { 
            while($row = mysqli_fetch_assoc($result2)) { 
    ?>
    <form class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="hidden" name="sid" value="<?php echo $row['sid']; ?>" />
            <input type="text" name="sname" value="<?php echo $row['sname']; ?>" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" value="<?php echo $row['saddress']; ?>" />
        </div>
        <div class="form-group">
            <label>Class</label>

            <?php
            
            $conn21 = mysqli_connect("localhost", "root", "", "crud_php") or die("Connection failed for class edit!");
            $sql21 = "SELECT * FROM studentclass";   
            $result21 = mysqli_query($conn21, $sql21) or die("connection failed from class edit query!");         
            if(mysqli_num_rows($result21) > 0) { 

                echo '<select name="sclass">
                      <option value="" selected disabled>Select Class</option>';
                while($row21 = mysqli_fetch_assoc($result21)) {
                    if($row['sclass'] = $row21['cid']) {
                        $select = "selected"; 
                    }else{
                        $select = "";
                    }

                echo "<option {$select} value='{$row21['cid']}'> {$row21['cname']} </option>";
                 }
                echo "</select>";
            }
            ?>

        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" value="<?php echo $row['sphone']; ?>" />
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