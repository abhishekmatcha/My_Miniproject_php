<?php
 session_start();

if(isset($_SESSION['username']))
{
	unset($_SESSION['username']);
 

echo "<body bgcolor='pink' align='center'>";
echo "<script>alert('Logged out successfully')</script>";

echo "<body><h3><a href='home.php'>Click here to login</a></h3></body>";
}

?>
