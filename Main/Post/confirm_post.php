<?php
	//글을 확인하는 페이지

	$con = mysqli_connect("localhost","root","2021","login") or die ("Can't access DB");	

	//main.php와 comfirm_post.php를 연결
	$No=$_GET['No'];
	

	//클릭한 페이지의 글을 불러옴
	session_start();
	$select = "select * from board where No='$No'";
	$result=mysqli_query($con,$select);

	if(mysqli_num_rows($result)==1)
	{
		$rows = mysqli_fetch_array($result);
	}

	
?>
<!DOCTYPE html>
<html lang="ko">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="./confirm_post_style.css" />
	</head>
	<body>
		<table class="view_table" align=center>
			<tr>
					<td colspan="4" class="view_title" style="background-color: #648CFF;"><?php echo $rows['Title']?></td>
			</tr>
			<tr>
					<td class="view_id">작성자</td>
					<td class="view_id2"><?php echo $rows['Name']?></td>
					<td class="view_hit">작성일</td>
					<td class="view_hit2"><?php echo $rows['Date']?></td>
			</tr>
			<tr>
					<td colspan="4" class="view_content" valign="top">
					<?php echo $rows['Content']?></td>
			</tr>
        </table>
 
 
        <div class="view_btn">
                <button class="view_btn1" onclick="location.href='../main.php'">목록으로</button>
                <button class="view_btn1" onclick="location.href='../delete.php?No=<?php echo $rows['No'] ?>'">삭제</button>
        </div>
		
	</body>
</html>
<?php
	/*
	-참고
		$No: 실제 DB의 인덱스번호,그런데 delete해도 갱신 안 됨 -> $total로 실제 글 개수로 갱신되게함
	-정리
		$No: 실제 인덱스, 사용자가 DB구조 유추 헷갈림(∨)
		$total: 드러나는 인덱스, 사용자가 DB구조 유추 가능(x)
	-결론
		$total값을 get으로 줘버리면 사용자들이 유추 가능해서 보안상 개발자들만 아는 $No를 get으로 넘겨서
	*/
	?>