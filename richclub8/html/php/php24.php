<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		//mysal 접속 소스를 include
		include_once "../connectDB.php";

		//SELECT * FROM myMember WHERE myMemberID = 1;

		$myMemberID = 1;

		$sql = "SELECT * FROM myMember WHERE myMemberID = {$myMemberID}";

		//쿼리문 전송 및 전송값을 result 변수에 대입
		$result = $dbConnect->query($sql);

		//가져온 결과를 어떻게 분류할 것인지를 설정
		$memberInfo = $result->fetch_array(MYSQLI_ASSOC);

		echo "<pre>";
		var_dump($memberInfo);

		echo "회원번호가 {$myMemberID}법인 회원의 이름은 ".$memberInfo['uname'];
	?>
</body>
</html>





