<?php 
include('config/block_user.php');


if($_GET['mode']=='SaveCash'){
	$fullname=$_POST['fullname'];
	$cash=$_POST['cash'];
	$envelop_no=$_POST['envelop_no'];
	$amount=$_POST['amount'];
	$account_no=$_POST['account_no'];


	include('config/connection.php');
	mysql_query("INSERT INTO kiosk_payment (oc_id,full_name,envelop_no,amount,payment_type,cheque_number,date_time_payment,account_no,payment_note,payment_print,payment_status)
		VALUES  ('$_SESSION[oc_id]','$fullname','$envelop_no','$amount','$cash','',NOW(),'$account_no','','no','pending')");
	header('location:user_thanks.php');
}


if($_GET['mode']=='SaveCheque'){
	$fullname=$_POST['fullname'];
	$cheque=$_POST['cheque'];
	$cheque_no=$_POST['cheque_no'];
	$envelop_no=$_POST['envelop_no'];
	$amount=$_POST['amount'];
	$account_no=$_POST['account_no'];


	include('dbconnect.php');
	mysql_query("INSERT INTO kiosk_payment (oc_id,full_name,envelop_no,amount,payment_type,cheque_number,date_time_payment,account_no,payment_note,payment_print,payment_status)
		VALUES ('$_SESSION[oc_id]','$fullname','$envelop_no','$amount','$cheque','$cheque_no',NOW(),'$account_no','','no','pending')");
	header('location:user_thanks_cheque.php');

}


if($_GET['mode']=='SavePin'){
	include('config/connection.php');
	$oc_id=$_POST['oc_id'];
	$pin_no=$_POST['pin_no'];

	mysql_query("UPDATE occupants set password='$pin_no' where oc_id='$oc_id'");
	echo "<script language='Javascript'>
			alert('Your account PIN Number has been Updated');
			location.href='user_index.php';
			</script>";
			die . mysql_error();

}
?> 