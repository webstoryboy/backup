<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$pattern = '/^[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9\-]+\.[\.a-zA-Z]+$/';

		$myEmail = "webstoryboy@naver.com";

		if(preg_match($pattern, $myEmail, $matches)){
			echo "입력한 이메일 주소 {$myEmail}는 사용 가능한 이메일 주소입니다.";
			echo "<pre>";
			var_dump($matches);
		} else {
			echo "사용 불가한 이메일 주소입니다.";
		}
	?>
</body>
</html>