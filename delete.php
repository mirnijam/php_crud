<?php 
include 'header.php'; 

if(isset($_POST['deletebtn'])) {
    include 'conn.php';

    $s_id = $_POST['id'];

    // Validate and sanitize input
    if(!empty($s_id) && is_numeric($s_id)) {
        // Use a prepared statement to prevent SQL injection
        $stmt = $con->prepare("DELETE FROM student WHERE id = ?");
        $stmt->bind_param("i", $s_id);

        if ($stmt->execute()) {
            // Redirect to index.php after successful deletion
            header("Location: index.php");
            exit;
        } else {
            echo "<p>Error: Unable to delete record. " . $con->error . "</p>";
        }

        $stmt->close();
    } else {
        echo "<p>Please enter a valid numeric ID.</p>";
    }

    mysqli_close($con);
}
?> 

<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="id" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</body>
</html>
