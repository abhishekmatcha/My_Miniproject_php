<?php
if(isset($_POST['submit']))
{
session_start();
$_SESSION['user']=$_POST['un'];
$_SESSION['pwd']=$_POST['pwd'];
$user=$_SESSION['user'];
$pwd=$_SESSION['pwd'];
$con=new mysqli("localhost","root","","dbname");
if($con==true)
echo "connected<br>";
$sql="select * from users where username='$user'";
$result=$con->query($sql);
if($result->num_rows==0)
   { 
       echo "invalid creditials<br>";
	}
   else
   {
        while($row=$result->fetch_assoc())
         {		
      if( $row['password']==$pwd )
        {
		   header("Location: first.html") ;
		}
      else
        {
           echo "invalid user or password";
        }
		}
	}	
$con->close();	
}

?>
<html>
<form align="center" method="post">
<body bgcolor="cyan">
username:<input type="text" name="un"><br><br>
password:<input type="password" name="pwd"><br><br>
<input type="submit" value="submit" name="submit">
</body>
</form>
</html>
