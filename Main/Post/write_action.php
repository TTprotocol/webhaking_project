<?php
	//글을 작성

	include "./save_post.php";
	date_default_timezone_set('Asia/Seoul');

	$Name=$_POST['Name'];
	$Title=$_POST['Title'];
	$Content=$_POST['Content'];
	$Date=date("Y-m-d H:i:s");
	$Pw=$_POST['Pw'];
 	
	$con = mysqli_connect("localhost","root","2021","login") or die ("Can't access DB");
	$URL='../main.php';

	$query = "insert into board (Name, Title, Content, Date, Pw) values('$Name','$Title','$Content','$Date','$Pw')";
	$result=mysqli_query($con,$query);
	
	if($result)
	{
	?>               
		<script>
        	alert("<?php echo "글이 등록되었습니다."?>");
            location.replace("<?php echo $URL?>");
        </script>
	<?php
    }
	else {
    	echo "FAIL";
    }
    mysqli_close($con);
?>