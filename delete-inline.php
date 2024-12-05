<?php
include 'conn.php';

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $s_id = $_GET['id'];

    // Use a prepared statement to prevent SQL injection
    $stmt = $con->prepare("DELETE FROM student WHERE id = ?");
    $stmt->bind_param("i", $s_id);

    if ($stmt->execute()) {
        echo "Record with ID $s_id deleted successfully.";
        header("Location: index.php");
        exit;
    } else {
        echo "Error: Unable to delete the record. " . $con->error;
    }

    $stmt->close();
} else {
    echo "Invalid ID or ID not provided.";
}

mysqli_close($con);
?>
