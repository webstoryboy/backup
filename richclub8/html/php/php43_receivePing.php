<?php
	include_once "../connectDB.php";

	// $sql = "CREATE TABLE linkClickCount(";
	// $sql .= "linkClickCountID INT UNSIGNED NOT NULL AUTO_INCREMENT,";
	// $sql .= "linkNum INT UNSIGNED NOT NULL COMMENT '링크 고유 번호',";
	// $sql .= "regTime DATETIME NOT NULL COMMENT '클릭한 시간',";
	// $sql .= "PRIMARY KEY (linkClickCountID))";
	// $sql .= "CHARSET=utf8 comment='링크 클릭 수 집계'";

	// $res = $dbConnect->query($sql);
	// if($res){
	// 	echo "테이블 생성 완료";
	// }else{
	// 	echo "테이블 생성 실패";
	// }

	$linkNum = (int) $_GET['linkNum'];

	if($linkNum == 0){
		exit;
	}

	$sql = "INSERT INTO linkClickCount(linkNum, regTime)";
	$sql .= "VALUES({$linkNum}, NOW())";
	$dbConnect->query($sql);
?>







