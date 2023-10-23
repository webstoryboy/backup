<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
  session_start();

  //세션 생성
  $_SESSION['userId'] = 'everdevel';

  if(isset($_SESSION['userId'])){
    echo "세션 생성 완료 세션 userId의 값 : {$_SESSION['userId']}";
  }else{
    echo "세션 생성 실패";
  }
?>
</body>
</html>