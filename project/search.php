<?php
    $servername = "localhost";    $username = "root";
    $password = "";
    $dbname = "dbname";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $var2=$_POST['hallticket1'];
    $sql="select * from reg where hallticketno='$var2'";
$result=$conn->query($sql);
while($rowval = mysqli_fetch_array($result))
 {
$hallticketno= $rowval['hallticketno'];
$name= $rowval['name'];
$fname= $rowval['fname'];
$gender= $rowval['gender'];
$dob= $rowval['dob'];
$course= $rowval['course'];
$branch= $rowval['branch'];
$cname= $rowval['cname'];

}
mysqli_close($conn);
 
?>

<html>
<body>
<form>
 
  <table  style="color:purple;border-style:groove; height:150px;width:350px" background="3.jpg">
        <tr>
           
            <td style="font-family:Copperplate Gothic Bold">&nbsp;</td>
        </tr>
        <tr>
            <td style="color:red;background-color:aqua;" class="auto-style3">Hallticket No:</td>
            <td class="auto-style4">
                <input id="Text1" type="text" value='<?php echo  $hallticketno; ?>'/></td>
        </tr>
        <tr>
            <td style="color:red;background-color:aqua;" class="auto-style3">Name</td>
            <td class="auto-style4">
                <input id="Text2" type="text" value='<?php echo  $name; ?>'/></td>
        </tr>
        <tr>
             <td style="color:red;background-color:aqua;" class="auto-style3">Father Name:</td>
            <td class="auto-style4">
                <input id="Text3" type="text" value='<?php echo  $fname; ?>' /></td>
        </tr>
        <tr>
             <td style="color:red;background-color:aqua;" class="auto-style3">Gender:</td>
            <td class="auto-style4">
                <input id="Text4" type="text" value='<?php echo  $gender; ?>' /></td>
        </tr>
        <tr>
            <td style="color:red;background-color:aqua;" class="auto-style3">DOB:</td>
            <td class="auto-style4">
                <input id="Text5" type="text" value='<?php echo  $dob; ?>' /></td>
        </tr>
        <tr>
           <td style="color:red;background-color:aqua;" class="auto-style3">Course:</td>
            <td class="auto-style4">
                <input id="Text6" type="text" value='<?php echo  $course; ?>' ></td>
        </tr>
        <tr>
             <td style="color:red;background-color:aqua;" class="auto-style3">Branch:</td>
            <td class="auto-style4">
                <input id="Text7" type="text" value='<?php echo  $branch; ?>'/></td>
        </tr>
        <tr>
             <td style="color:red;background-color:aqua;" class="auto-style3">College Name:</td>
            <td class="auto-style4">
                <input id="Text8" type="text" value='<?php echo  $cname; ?>' /></td>
        </tr>
               

        <tr>
            <td></td>
        </tr>

    </table>
	<a href="logout.php" >click here to log out</a>
    
</form>
</body>
</html>