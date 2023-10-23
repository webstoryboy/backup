<?php
	//mysal 접속 소스를 include
	include_once "../connectDB.php";

	//post 방식으로 
	echo "<pre>";
	//var_dump($_POST);

	//이름 인증
	if($_POST['useName'] == ' ' || $_POST['useName'] == null ){
		echo "이름이 잘못되었습니다. 1.name";
		exit;
	} 

	$uname = $_POST['useName'];
	//공백제거
	$uname = trim($uname);
	//쿼리문의 따옴표 처리를 위해 real_escape_string 메소드 사용
	$uname = $dbConnect->real_escape_string($uname);


	//아이디 검증
	if($_POST['useID'] == '' || $_POST['useID'] == null){
		echo "아이디가 잘못되었습니다. 2.ID";
		exit;
	}
	$useID = $_POST['useID'];
	$useID = trim($useID);
	$useID = $dbConnect->real_escape_string($useID);


	//비밀번호 검증
	if($_POST['usePW'] == '' || $_POST['usePW'] == null){
		echo "비밀번호가 잘못되었습니다. 3.PW";
		exit;
	}
	$upassword = sha1("web".$_POST['usePW']);

	//성별 검증
	if($_POST['useGender'] == 'm' || $_POST['useGender'] == 'w'){
		$gender = $_POST['useGender'];
	} else {
		echo "해당 값을 사용할 수 없습니다. 4. useGender";
		exit;
	}

	//이메일 유효성 검삭
	$emailCheck = filter_var($_POST['useEmail'], FILTER_VALIDATE_EMAIL);
	if($emailCheck == false){
		echo "해당 이메일을 사용할 수 없습니다. 5. email";
		exit;
	}
	
	$email = $_POST['useEmail'];


	//쿼리문 작성
	$sql = "INSERT INTO myMember(useID, uname, upassword, phone, email, birthDay, gender, regTime) VALUES";
	$sql .= "('{$useID}','{$uname}','{$upassword}','{$phone}','{$email}','{$birthDay}','{$gender}',NOW())";


	//쿼리문 전송 및 전송값을 result 변수에 대입
	$result = $dbConnect->query($sql);

	if($result){
		echo "yes";
	} else {
		echo "no";
	}
?>












