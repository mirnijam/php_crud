<?php
ini_set('display_errors', 1);
include 'conn.php';
include 'phonenovalidation.php';
echo $name =  htmlspecialchars($_POST['name']);
echo $address = $_POST['address'];
echo $class = $_POST['class'];
echo $phone = $_POST['phone'];
if (validatePhoneNumber($phone)) {
    echo "Phone number is valid.";
    $sql = "INSERT INTO `student`(`id`, `name`, `address`, `class`, `phone`) VALUES ('','$name','$address','$class','$phone')";
    $sql1 = "INSERT INTO `studentclass` VALUES ('','$class', '2020-01-01')";
    try {
        $con->query($sql);
        $con->query($sql1);
        //commit
        $con->commit();
    } catch (mysqli_sql_exception $e) {
        $con->rollback();
        echo '<br/>sorry</br>';
    }
} else {
    echo "Phone number is invalid. Please enter a 10-digit number.";
}





//header("location: index.php");


mysqli_close($con);
