<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>회원 이름 변경하기</title>
</head>
<body>
	<form action="php30_update.php" method="post" name="update">
		<label for="memberID">회원번호</label>
		<input type="number" name="memberID" id="memberID">

		<label for="changeName">변경할 이름</label>
		<input type="text" name="changeName" id="changeName">

		<input type="submit" value="변경하기">
	</form>
</body>
</html>