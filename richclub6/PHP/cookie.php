<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php

  if(isset($_COOKIE['myCookie'])){
    echo "쿠키 확인 {$_COOKIE['myCookie']}";
  }else{
    echo "쿠키 생성 실패";
  }
?>
</body>
</html>