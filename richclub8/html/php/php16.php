<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$email = "webstoryboy@naver.com";
		$emailArray = explode("@",$email);

		echo "<pre>";
		var_dump($emailArray);

		echo "이메일의 호스트 출력<br>";
		echo $emailArray[1];
	?>
</body>
</html>