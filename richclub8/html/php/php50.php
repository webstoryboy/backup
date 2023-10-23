<?php
	session_start();

	//현재 시간에서 섹션 생성 시간을 빼서 차이를 구함
	$time = time() - (int) $_SESSION['mySession10']['generation'];

	//차이의 값이 섹션 유지 시간보다 크면 섹션 삭제
	echo "{$time} Has passed since the section was created.<br>";
	if( $time > $_SESSION['mySession10']['duration'] ){
		unset($_SESSION['mySession10']);
	}

	//섹션 존재 여부 확인
	if( isset($_SESSION['mySession10'])){
		echo "Section exists : {$_SESSION['mySession10']['value']}";
	} else {
		echo "Section does not exist.";
	}
	
?>