<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>

    <?php 
    if(isset($_POST['showbtn'])) {
        $conn4 = mysqli_connect("localhost", "root", "", "crud_php") or die("Connection failed for update file!");
      
        $id = $_POST['sid'];
    
        $sql4 = "SELECT * FROM student WHERE sid = {$id}";

        $result4 = mysqli_query($conn4, $sql4) or die("connection failed from update file query!"); 
    
        if(mysqli_num_rows($result4) > 0) { 
            while($row = mysqli_fetch_assoc($result4)) { 
    
    ?>

    <form class="post-form" action="updateData.php" method="post">
        <div class="form-group">
            <label for="">Name</label>
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
            
            $conn41 = mysqli_connect("localhost", "root", "", "crud_php") or die("Connection failed for class update file!");
            $sql41 = "SELECT * FROM studentclass";   
            $result41 = mysqli_query($conn41, $sql41) or die("connection failed from class update query!");         
            if(mysqli_num_rows($result41) > 0) { 

                echo '<select name="sclass">
                      <option value="">Select Class</option>';
                while($row41 = mysqli_fetch_assoc($result41)) {
                    if($row['sclass'] == $row41['cid']) {
                        $select = "selected"; 
                    }else{
                        $select = "";
                    }

                echo "<option {$select} value='{$row41['cid']}'> {$row41['cname']} </option>";
                 }
                echo '</select>';
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
    }
    ?>
</div>
</div>
</body>

</html>