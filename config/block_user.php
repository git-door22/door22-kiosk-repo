<?php
include("connection.php");
session_start();
if(!isset($_SESSION['oc_id'])){	
echo "<script language='Javascript'>
			alert('Sorry, you are not logged in. Please login first!');
			location.href='index.php';
			</script>";
			die . mysql_error();				
}	
?>
