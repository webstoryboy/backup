<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>화면 전환없이 아이디 중복 체크</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#idCheckBtn").click(function(){
				//AJAX 통신 시작
				$.ajax({
					type: 'post',						//post 방식으로 전달
					dataType: 'json',					//json 언어로 전달
					url: './php44_idCheck.php',
					data: {userId: $('#userId').val()},	//전달할 데이터
					async: false,						//값을 전달 받은 후 실행

					success: function(data){
						var word = "이미지 존재하는 아이디입니다.";
						if(data.result == 'good'){
							word = "아이디를 사용해도 좋습니다.";
						}
						$("#idCheckComment").text(word);
					},
					error : function(request, status, error){
						console.log('request'+request);
						console.log('status'+status);
						console.log('error'+error);
					}
				});
			});
		});
	</script>
</head>
<body>
	<input type="text" name="userId" id="userId" placeholder="아이디 입력">
	<input type="button" id="idCheckBtn" value="중복 확인">
	<div id="idCheckComment"></div>
</body>
</html>