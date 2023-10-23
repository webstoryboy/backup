<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php

	setcookie('myCookie2','itIsMyCookie2',time()+10000,'/');

	if(isset($_COOKIE['myCookie2'])){
		echo "쿠키 생성 완료 쿠키의 값은 {$_COOKIE['myCookie2']} ";
	} else {
		echo "쿠키 생성 실패 ";
	}

?>
</body>
</html>