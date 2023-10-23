<?php
	
	//mysal 접속 소스를 include
	include_once "../connectDB.php";

	//데이터 입력
	$useID = "webstoryboy";
	$uname = "웹스";
	$upassword = "1234";
	$phone = "010-7112-2049";
	$email = "webstoryboy@naver.com";
	$birthDay = "1972-04-25";
	$gender = "m";

	//쿼리문 작성
	$sql = "INSERT INTO myMember(useID, uname, upassword, phone, email, birthDay, gender, regTime) VALUES";
	$sql .= "('{$useID}','{$uname}','{$upassword}','{$phone}','{$email}','{$birthDay}','{$gender}',NOW())";

	//쿼리문 전송 및 전송값을 result 변수에 대입
	$result = $dbConnect->query($sql);

	if($result){
		echo "yes";
	} else {
		echo "no";
	}

?>




