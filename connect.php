<?php
$servername ="localhost";
$username = "root";
$password = "";
$database="appointment";

$conn = mysqli_connect($servername,$username,$password,$database);
$name1 = $_POST['firstname'];
$surname = $_POST['lastname'];
$star = $_POST['feedstar'];
$feedback = $_POST['subject'];
$sql = "INSERT INTO `feedback` (`name`, `surname`, `star`, `feedback`)
VALUES ('$name1','$surname','$star','$feedback')";
$result = mysqli_query($conn,$sql);
?>