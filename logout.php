<?php
include("config/connection.php");

$id=$_GET['oc_id'];
$r=mysql_fetch_array(mysql_query("SELECT oc_id from occupants WHERE oc_id='$id'"));
$userID=$r['oc_id'];


$sql_update="UPDATE kiosk_payment SET print='yes' where print='no'";
$result=mysql_query($sql_update);
session_start();
session_destroy();
header("location:index.php");
?>
