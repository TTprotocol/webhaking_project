<?php
	date_default_timezone_set('Asia/Seoul');

	$id=$_POST['id'];
	$pw=$_POST['pw'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$date=date("Y-m-d H:i:s");
	$pw=md5($pw);

?>