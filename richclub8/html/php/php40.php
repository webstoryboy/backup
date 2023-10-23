<?php
	//파일에 쓸 내용
	$content = "Hello PHP";

	//저장할 파일명
	$fileName = "HelloWorld.txt";

	//파일 열기
	$fp = fopen('./myFiles/'.$fileName,'w');

	//파일 쓰기
	$fw = fwrite($fp, $content);

	//파일 쓰기 성공 여부
	if($fw == false){
		echo "파일 쓰기가 실패했습니다.Yes";
	} else {
		echo "파일 쓰기 완료 No";
	}

	//파일 닫기
	fclose($fp);
?>
