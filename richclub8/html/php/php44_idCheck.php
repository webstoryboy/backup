<?php
	//echo json_encode(array('result'=>'good'));

	include_once "../connectDB.php";

	//중복 확인 요청 받은 아이디
	$userId = $dbConnect->real_escape_string(trim($_POST['userId']));

	//쿼리문 생성
	$sql = "SELECT useID From myMember WHERE useID = '{$userId}'";
	//쿼리문 질의
	$res = $dbConnect->query($sql);

	//전달할 데이터
	$jsonResult = "bad";

	//해당하는 레코드 수가 0이라면 중복되는 아이디가 없다는 뜻
	if($res->num_rows == 0){
		$jsonResult = "good";
	}

	echo json_encode(array('result'=>$jsonResult));
?>