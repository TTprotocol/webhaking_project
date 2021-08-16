<?php

/*수정할 것: 입력값에 대한 필터링/

	include "save_write_variables";
	session_start();
	$con = mysqli_connect("localhost","root","2021","login") or die ("Can't access DB");
	//$board = "SELECT * FROM board";
	//$table=mysqli_query($con,$board);
	//board 테이블에서 인덱스 칼럼(No)을 내림차순(desc)으로 가져옴
	$select = "select * from board order by No desc";
	$result=mysqli_query($con,$select);
    //total은 열 개수
	$total = mysqli_num_rows($result);
	$_SESSION['author']=$row['Name'];*/
?>

<!-- db에 들어간 내용
게시판 테이블명: board
글 번호, 이름, 제목, 내용, 날짜
변수: No , Name, Title, Content, Date
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!DOCTYPE html>
<html lang="ko">
	<head>
		<meta charset="UTF-8">
		<title>Main Page</title>
		
		<style>
        	table{
                border-top: 1px solid #444444;
                border-collapse: collapse;
        	}
        	tr{
                border-bottom: 1px solid #444444;
                padding: 10px;
        	}
        	td{
                border-bottom: 1px solid #efefef;
                padding: 10px;
        	}
        	table .even{
                background: #efefef;
        	}
        	.text{
                text-align:center;
                padding-top:20px;
                color:#000000
        	}
        	.text:hover
			{
                text-decoration: underline;
        	}
        	a:link {color : #57A0EE; text-decoration:none;}
        	a:hover { text-decoration : underline;}
			
		</style>
            
             <meta name="generator" content="editplus" />
             <meta name="author" content=" " />
             <style type="text/css">

                    #list {
                           width:500px;
                           border:1px solid orange;
                           border-collapse:collapse;
                    }

                    #list td, #list th{
                           font-size:12px;
                           border:1px solid orange
                           padding:3px;
                    }


                    #list th{
                           background-color:#cc99cc;
                    }

                    #list .td1 {
                           width:3px;
                           text-align:center;
                    }

                    #list .td2 {
                           width:150px;
                           text-align:center;
                    }

                    #list .td3 {
                           width:50px;
                           text-align:center;
                    }

                    #list .td4 {
                           width:50px;
                           text-align:center;
                    }

                    #list .td5 {
                           width:5px;
                           text-align:center;
                    }

                    #list .altRow{
                           background-color:#e0f0b5;
                    }
             </style>
	</head>
	
	<body>
		<!--접속-->
		<?php
			if (isset($_SESSION['user_name']))
			{
				echo "{$_SESSION['user_name']}님 환영합니다.";
			}
		?>

		<form action="../Login/log_out.php">
			<br><input type="submit" value="로그아웃">
		</form>
		
		<!--글 작성 페이지로 넘김-->
		<form method="post" action="./Post/write.php">
            <br><input type="submit" value="글쓰기">
        </form>
		
        <h2 align=center>게시판</h2>
        <table align = center>
        <thead align = "center">
        <tr class="altRow">
        	<td width = "50" align="center">번호</td>
        	<td width = "500" align = "center">제목</td>
        	<td width = "100" align = "center">작성자</td>
        	<td width = "200" align = "center">날짜</td>
        </tr>
        </thead>
        <tbody>
        <?php
            //게시글 삭제시 auto increment로 설정된 no가 갱신이 안 되어서 db에 저장된 수로 게시글 인덱스 출력
            while($rows = mysqli_fetch_assoc($result))
			{ 
			$rel='';
        ?>	
			<tr>
                <td width = "50" align = "center"><?php echo $total?></td>
    	             <?php
					/*<td width = "500" align = "center">
        	        <a href = "<?php echo $rows['']?>">
            	    <?php echo $rows['title']?></td>*/?>
                	
                	<td width = "100" align = "center">
						<!--글을 확인하는 confirm_post.php로 이동-->
						<a href="./Post/confirm_post.php?No=<?php echo $rows['No'] ?>">
							<?php echo $rows['Title']?>
						</a>
					</td>
                	<td width = "200" align = "center"><?php echo $rows['Name']?></td>
					<td width = "50" align = "center"><?php echo $rows['Date']?></td>
				</tr>
        <?php
                //total --가 게시글 출력 인덱스 삭제시 대비해서
                $total--;
                }
        ?>
        </tbody>
        </table>
	</body>
</html>