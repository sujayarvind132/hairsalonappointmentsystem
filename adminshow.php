<?php
error_reporting(0);
include("try.php");
?>
<html>
    <head>
        <title>LIST OF CUSTOMER</title>
    </head>
    
    <center>
       
    <table border="2">
    <tr>
                <td>Id</td>
               <td >Name</td>
               <td>WhatsApp_Number</td>
               <td>Date</td>
               <td>Time</td>
               <td>Alternate_Time</td>
               <td>Hair_Artist</td>
               <td>Service</td>
               <td>Payment</td>
    </tr>
            
<?php
    



$query = "select * from appointment";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);


echo $result['id']." ".$result['Name']." "
 .$result['WhatsApp_Number']." "
 .$result['Date']." "
 .$result['Time']." "
 .$result['Alternate_Time']." "
 .$result['Hair_Artist']." "
 .$result['Service']." "
 .$result['Payment'];

 if($total!=0){
    //$result = mysqli_fetch_assoc($data);
    while($result=mysqli_fetch_assoc($data)){
        echo "
        <tr>
            <td>".$result['id']."</td>
            <td>".$result['Name']."</td>
            <td>".$result['WhatsApp_Number']."</td>
            <td>".$result['Date']."</td>
            <td>".$result['Time']."</td>
            <td>".$result['Alternate_Time']."</td>
            <td>".$result['Hair_Artist']."</td>
            <td>".$result['Service']."</td>
            <td>".$result['Payment']."</td> 
       

        </tr>";
    }
 }
 else{
     echo "No record found";
 }
?>
</center>
</table>
</html>
