<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	include_once "../connectDB.php";

	$myMemberID = (int) $_POST['memberID'];

	if($myMemberID == 0){
		echo "멤버 회원 아이디 값이 없습니다.";
		exit;
	} 

	if($_POST['changeName'] == '' || $_POST['changeName'] == null){
		echo "회원 이름이 올바르지 않습니다.";
		exit;
	} else {
		$changeName = $dbConnect->real_escape_string($_POST['changeName']);
	}

	$sql = "UPDATE myMember SET uname = '{$changeName}' WHERE myMemberID = {$myMemberID}";
	$res = $dbConnect->query($sql);

	if($res){
		echo "회원번호 {$myMemberID}의 이름이 {$changeName} 으로 변경되었습니다.";
	} else {
		echo "이름 변경이 안됩니다.";
	}
?>
</body>
</html>