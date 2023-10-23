<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>회원가입</h1>
	<form action="php23_insert.php" method="post" name="signUp">
		<label for="useName">이름</label>
		<input type="input" id="useName" name="useName" placeholder="이름"><br>

		<label for="useID">ID</label>
		<input type="input" id="useID" name="useID" placeholder="ID"><br>

		<label for="usePW">비밀번호</label>
		<input type="input" id="usePW" name="usePW" placeholder="비밀번호"><br>

		<label for="useGender">성별</label>
		<select name="useGender" id="useGender">
			<option value="m">남성</option>
			<option value="w">여성</option>
		</select><br>

		<label for="useEmail">이메일</label>
		<input type="email" id="useEmail" name="useEmail" placeholder="이메일 입력"><br>

		<input type="submit" value="가입하기">
	</form>
</body>
</html>



