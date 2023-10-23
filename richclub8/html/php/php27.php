<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		include_once "../connectDB.php";

		//성 배열
		$familyName = array();
		$familyName = ['김','이','박','전','황','강','손','송','하','최','조','노','윤'];

		//이름 배열
		$lastName = array();
		$lastName = ['상연','상현','상순','순실','상돌','상미','상수','상금','상실','상소','상민','상가','상상','상지','상자','상장','상술','상속'];

		//성 배열
		$useGender = array();
		$useGender = ['m','w'];

		//테이블에 회원 정보 입력 성공 카운트
		$successCount = 0;
		$failCount = 0;

		//insert문을 500회 작동시키기
		for($i=1; $i<=500; $i++){
			//랜덤으로 받아오기
			$numRandomFN = rand(0,count($familyName) - 1);
			$numRandomLN = rand(0,count($lastName) - 1);
			$gender = $useGender[rand(0,1)];
			$upassword = sha1("web".rand(1,1000));
			$uname = $familyName[$numRandomFN].$lastName[$numRandomLN];
			$useID = "websotry".rand(1,9999999);
			$email = "web".rand(1,9999)."@naver.com";

			//쿼리문 작성
			$sql = "INSERT INTO myMember(useID, uname, upassword, email, gender, regTime) VALUES";
			$sql .= "('{$useID}','{$uname}','{$upassword}','{$email}','{$gender}',NOW())";
		
			$result = $dbConnect->query($sql);

			if($result){
				$successCount++;
			} else {
				$failCount++;
			}
		}

		echo "입력 성공 수 : {$successCount}";
		echo "<br>";
		echo "입력 실패 수 : {$failCount}";
	?>
</body>
</html>









