<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		ini_set('date.timezone','Asia/Seoul');
		// echo "2019년 4월 4일 10시 25분 10초의 타임스탬프는? <br>";
		// echo mktime(20, 25, 10, 4, 4, 2019);

		//시작 시간 설정
		$startTime = mktime(10, 25, 10, 4, 4, 2019);

		//종료 시간 설정
		$endTime = mktime(10, 33, 10, 4, 4, 2019);

		if( $startTime <= time() && $endTime > time() ){
			echo "이벤트를 참여하세요";
		} else {
			echo "이벤트 시작 전이거나 종료되었습니다.";
		}
	?>	
</body>
</html>