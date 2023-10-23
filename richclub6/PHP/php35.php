<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php

	$pattern = '/^[a-zA-z0-9_\-\.]+@[a-zA-z\-]+\.[\.a-zA-Z]+$/';

	$myEmail = 'webstoryboy@naver.com';

	if(preg_match($pattern, $myPhone, $matches)){
		echo "입력한 이메일 주소 {$myEmail}는 사용가능한 이메일 주소입니다.";
		echo "<pre>";
		var_dump($matches);
	} else {
		echo "사용불가한 이메입니다.";
	}
?>
</body>
</html>



