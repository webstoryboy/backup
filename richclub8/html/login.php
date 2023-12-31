<?php
    session_start();

    //MySQL 접속
    $host = 'localhost';
    $user = 'richclub8';
    $pw = 'forever0';
    $dbName = 'richclub8';
    $dbConnection = new mysqli($host, $user, $pw, $dbName);
    $dbConnection->set_charset("utf8");
    //이메일 유효성 확인
    $emailCheck = false;
    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $emailCheck = true;
    }
    if($emailCheck == false){
        echo '이메일을 정확히 입력해 주세요';
        header("Location:./index.php");
        exit;
    }

    //이메일 주소 앞뒤 공백 제거와 escape 처리
    $userEmail = trim($dbConnection->real_escape_string($_POST['email']));
    //비밀번호 암호화
    $userPw = sha1("mySalt".$_POST['userPw']);

    //이메일과 비밀번호가 일치하는 레코드 있는지 확인하는 쿼리문
    $sql = "SELECT * FROM myPage WHERE email = '{$userEmail}' AND pw = '{$userPw}'";
    //전송
    $res = $dbConnection->query($sql);
    //레코드 수 1개이면 로그인 처리
    if($res->num_rows == 1){
        $memberInfo = $res->fetch_array(MYSQLI_ASSOC);
        //일치하는 정보가 있으므로 세션 생성
        $_SESSION['myMemberSes'] = array();
        $_SESSION['myMemberSes']['email'] = $memberInfo['email'];
        $_SESSION['myMemberSes']['userName'] = $memberInfo['userName'];
        $_SESSION['myMemberSes']['myMemberID'] = $memberInfo['myMemberID'];
        $_SESSION['myMemberSes']['profilePhoto'] = $memberInfo['profilePhoto'];
        $_SESSION['myMemberSes']['coverPhoto'] = $memberInfo['coverPhoto'];

        //나중에 로그 기능 구현

        //세션이 생성되었는지 확인 후
        if(isset($_SESSION['myMemberSes'])){
            //나의 페이지로 이동
            header("Location:./me.php");
        }
        //레코드 수가 1개가 아니면 로그인 정보 맞지 않음 처리
    }else{
        echo "<script>alert('아이디 혹은 비밀번호가 다릅니다.'); location.href='/myservice/'; </script>";
    }
?>