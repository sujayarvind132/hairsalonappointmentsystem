<?php
error_reporting(0);
//include "feedc.html";
include "feedc.html";
include "feedbackconnect.php";
?>
<center>
    <table border="2" >
        <tr>
            <td>Id</td>
            <td>Firstname</td>
            <td>Lastname</td>
            <td>Star</td>
            <td>Feedback</td>

        </tr>

<?php
      
    $query = "select * from feedback";
    $data = mysqli_query($conn,$query);
    $total = mysqli_num_rows($data);

echo $result['Id']." "
    .$result['name']." "
    .$result['surname']." "
    .$result['star']." "
    .$result['feedback'];


if($total!=0){
    while($result=mysqli_fetch_assoc($data)){
        echo"
        <tr>
            <td>".$result['Id']."</td>
<td>".$result['name']."</td>
<td>".$result['surname']."</td>
<td>".$result['star']."</td>
<td>".$result['feedback']."</td>
        </tr>";

    }
}
else{
    echo "No record found";
}
?>
     </table>
</center>
