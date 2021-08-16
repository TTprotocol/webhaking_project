
<?php
	//비밀번호 확인 후 글 삭제
	$query = "delete from board where No='$No'";
	$result=mysqli_query($con,$query);
	
	$URL='main.php';
	$con = mysqli_connect("localhost","root","2021","login") or die ("Can't access DB");
	$No=$_GET['No'];
	

	$rows = mysqli_fetch_array($result);
	$query = "delete from board where No='$No'";
	$result=mysqli_query($con,$query);
?>

	<script>
		alert("<?php echo "삭제가 완료되었습니다."?>");
        location.replace("../Main/main.php");
	</script>

?>


