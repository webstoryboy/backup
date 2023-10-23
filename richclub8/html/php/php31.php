<?php

	include_once "../connectDB.php";

	$sql = "DELETE FROM myMember WHERE myMemberID = 14";
	$res = $dbConnect->query($sql);

	if($res){
		echo "14번 회원의 정보가 삭제되었습니다.";
	} else {
		echo "삭제 실패";
	}
?>