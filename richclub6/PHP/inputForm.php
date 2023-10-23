

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
textarea{float:left;width:500px;height:100px}
input{clear:both;float:left}
</style>
</head>
<body>
	<h1>입력한 테스트를 파일에 저장하기</h1>
  <form name="myText" method="post" action="makingFile.php">
    <textarea name="myInputText"></textarea>
    <input type="submit" value="입력" />
  </form>
</body>
</html>