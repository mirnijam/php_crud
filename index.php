<?php
include 'header.php';
include 'conn.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php
    $sql = "SELECT student.*, studentclass.*, student.id AS student_id FROM student LEFT JOIN studentclass ON student.id = studentclass.id";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
    ?>
        <table cellpadding="7px">
            <thead>
                <th>SL</th>
                <th>Name</th>
                <th>Address</th>
                <th>Class</th>
                <th>Phone</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php
                $a = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $a++; ?></td>
                        <td><?php echo htmlspecialchars($row['name']); ?></td>
                        <td><?php echo htmlspecialchars($row['address']); ?></td>
                        <td><?php echo htmlspecialchars($row['class']); ?></td>
                        <td><?php echo htmlspecialchars($row['phone']); ?></td>
                        <td>
                            <a href='edit.php?id=<?php echo $row['student_id']; ?>'>Edit</a>
                            <a href='delete-inline.php?id=<?php echo $row['student_id']; ?>' onclick="return confirm('Are you sure you want to delete this record?');">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php
    } else {
        echo "<p>No records found.</p>";
    }
    ?>
</div>
</body>
</html>
