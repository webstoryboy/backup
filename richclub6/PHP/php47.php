<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php

	session_start();

	//생션 생성 
	$_SESSION['uesrId'] = 'webstoryboy';

	if(isset($_SESSION['uesrId'])){
		echo "세션 생성 완료 아이디 값 : {$_SESSION['uesrId']}";
	} else {
		echo "세션 생성 실패 ";
	}

?>
</body>
</html>