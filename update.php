<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="id" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>
    <?php
    if(isset($_POST['showbtn'])){
    include 'conn.php';
    $s_id=$_POST['id'];
    $sql="SELECT * FROM student WHERE id = {$s_id}";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_assoc($result)) {

    ?>
    <form class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
            <label for="">Name</label>
            <input type="hidden" name="id"  value="<?php echo $row['id']; ?>" />
            <input type="text" name="name" value="<?php echo $row['name']; ?>" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="address" value="<?php echo $row['address']; ?>" />
        </div>
        <div class="form-group">
        <label>Class</label>
        <select name="class" id="">
                    <option value="" disabled>Select class</option>
                    
                    <option value="10" <?php if($row['class'] == '10') echo 'selected'; ?>>10</option>
                    <option value="11" <?php if($row['class'] == '11') echo 'selected'; ?>>11</option>
                    <option value="12" <?php if($row['class'] == '12') echo 'selected'; ?>>12</option>
                </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="phone" value="<?php echo $row['phone']; ?>" />
        </div>
    <input class="submit" type="submit" value="Update"  />
    </form>
    <?php
    } }} 
    ?>
</div>
</div>
</body>
</html>
