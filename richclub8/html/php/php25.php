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

		//SELECT uname, useID FROM myMember; 
		$sql = "SELECT uname, useID FROM myMember";

		//쿼리문 전송 및 전송값을 result 변수에 대입
		$result = $dbConnect->query($sql);

		//레코드 수를 가져오는 명령어
		$numResult = $result->num_rows;

		if($numResult != 0){

			for($i=0; $i<$numResult; $i++){
				$memberInfo = $result->fetch_array(MYSQLI_ASSOC);
				echo "회원이름 : ".$memberInfo['uname']." 회원 ID: ".$memberInfo['useID']."<br>";
			}
		} else {
			echo "회원이 없습니다.";
		}
	?>
</body>
</html>




