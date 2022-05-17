<?php
$servername="localhost";
$username="root";
$password="";
$database="appointment";

$conn= mysqli_connect($servername,$username,$password,$database);
$Name=$_POST['Name'];
$WhatsAppNumber=$_POST['WhatsApp_Number'];
$Select_Date=$_POST['Date'];
$Select_Time1=$_POST['Time'];
$Select_Time2=$_POST['Alternate_Time'];
$Hair_Artist=$_POST['Hair_Artist'];
$Service=$_POST['Service'];
$Payment=$_POST['Payment'];

$sql="INSERT INTO `appointment` (`Name`, `WhatsApp_Number`, `Date`, `Time`, `Alternate_Time`, `Hair_Artist`,`Service`,`Payment`) 
VALUES ('$Name', '$WhatsAppNumber', '$Select_Date', '$Select_Time1', '$Select_Time2', '$Hair_Artist','$Service','$Payment')";

$result= mysqli_query($conn,$sql);
include 'new1.html';
?>