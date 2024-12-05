<?php
include 'conn.php';


$id = $_POST['id'];
$name = $_POST['name'];
$address = $_POST['address'];
$class = $_POST['class'];
$phone = $_POST['phone'];


$sql = "UPDATE student SET name = '{$name}', address = '{$address}', class = '{$class}', phone = '{$phone}' WHERE id = '{$id}'";


$result = mysqli_query($con, $sql);


header("Location: index.php");


mysqli_close($con);
?>
