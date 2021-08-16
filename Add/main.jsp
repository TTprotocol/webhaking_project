<!-- 로그인 성공시 들어오는 메인 페이지 입니다. -->

<!-- 필요 기능 : 상단 id 표시, 그 옆에 로그아웃 버튼, 게시판 기능(-> 글 보기, 글 쓰기, 글 삭제 등등...), 게시판 기능을 위한 db 연결 등등... 

<!-- https://blog.naver.com/pyoue97/222283994034 블로그의 내용을 토대로 작성하는 중입니다... 페이지가 심플하고 좋아 보여서 들고 오고 있는데, 혹시 다른 의견 있으시면 기탄없이 말씀해 주시면 감사하겠습니다. 

-->

<%@ page language = "java" contentType = "text/html; charset = UTF-8 pageEncoding = UTF-8" %>
<%@ taglib prefix = "c"			url = "http://java.sun.com/jsp/jstl/core" %>
<%@ taglib prefix = "form"		url = "http://www.springframework.org/tags/form" %>
<%@ taglib prefix = "ui"		url = "http://egovframework.org/ctl/ui" %>
<%@ taglib prefix = "spring"	url = "http://www.springframework.org/tags" %>
<%@ taglib prefix = "fn" 		url = "http://java.sun.com/jsp/jstl/functions" %>
<%@ taglib prefix = "fmt"		url = "http://java.sun.com/jsp/jstl/fmt" %>

<!DOCTYPE html PUBLIC "-//W3c//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose/dtd">
<html>
	<head lang="ko">
		<meta charset="UTF-8">
		
		<style>
		
		</style>
		
		<script>
			function paga(num) {
				document.listForm.pageIndex.value = num;
				document.listForm.submit();
			}
		</script>
		
	</head>
	
	<body>
		<!-- 로그인 한 사용자 id를 가져오기. -->
		<h2><?php $id ?> 님, 반갑습니다.</h2>
	</body>
</html>




