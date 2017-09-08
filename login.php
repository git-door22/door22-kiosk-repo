<?php
session_start();
include("config/connection.php");

$username=$_POST['username']; 
$password=$_POST['password'];

$sql="SELECT * FROM occupants WHERE username='$username' and password='$password' ";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if($count==1) 
{
while($row = mysql_fetch_array($result))
	  {
			$_SESSION['username'] = '$username';
			$_SESSION['password'] = '$password';
			$_SESSION['oc_id'] = "$row[oc_id]";
			
			
			header("location:user_index.php");
			
 	  }
}		
else
{
header("location:login_fail.html");
}

?>

