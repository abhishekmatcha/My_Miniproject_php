<html>
<?php
$con=new mysqli("localhost","root","","dbname");
if($con==true)
	echo "Connected<br>";
else
	echo "Error:".$con->connect_error;
$var1=$_POST['hallticket2'];
$sql = "select * from reg where hallticketno='$var1'";
$result=$con->query($sql);
if ($result->num_rows >0) {
    while($row = $result->fetch_assoc()) {
        echo "user: " . $row["hallticketno"]. "<br>";
        echo "applied";
    }
} else {
    echo "USER NOT APPLIED";
}
$con->close();
?>
</html>