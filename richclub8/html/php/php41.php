<?php
	$filePathName = "./myFiles/HelloWorld.txt";

	//1. 파일 존재 여부 확인
	if(file_exists($filePathName)){
		//2. 파일 열기
		$fp = fopen($filePathName, 'r');
		if($fp){
			//3. 파일 읽기
			$fr = fread($fp, filesize($filePathName));
			if($fr){
				//4. 내용 출력
				echo $fr;
				fclose($fp);
			} else {
				echo "파일 읽기에 실패했습니다.";
			}

		} else {
			echo "파일 열기에 실패했습니다.";
		}
	} else {
		echo "파일이 존재하지 않습니다.";
	}
?>