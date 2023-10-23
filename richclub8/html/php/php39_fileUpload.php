<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	//임시 저장된 정보
	$myTempFile = $_FILES['myImage']['tmp_name'];

	//파일 유형 및 확장자 정보 
	$fileTypeExtension = explode("/", $_FILES['myImage']['type']);

	//파일 유형 
	$fileType = $fileTypeExtension[0];

	//파일 확장자 
	$extension = $fileTypeExtension[1];

	//1. 이미지 파일 확인 -> 이미지 확장자 확인 -> 이미지 파일명 생성 -> 이미지 경로 저장 
	//2. 폴더 여부 확인 -> 폴더 열기 -> 파일 읽기 -> 파일 위치 옮김 -> 파일 업로드 확인 

	//이미지 파일이 맞는지 확인 
	if($fileType == 'image'){
		//이미지 확장자 파일이 맞는 확인 
		if($extension == 'jpeg' || $extension == 'jpg' || $extension == 'bmp' ||  $extension == 'gif' || $extension == 'png'){

			//저장할 파일명 생성 
			$makingFileName = "myImage".time().rand(1,99999)."."."{$extension}";

			//이미지 경로 설정 
			$myFile = "./images/{$makingFileName}";

			$dir = "./images/";

			//폴더 존재 여부 확인 
			if(is_dir($dir)){

				//폴더 열기 
				$opendir = opendir($dir);
				if($opendir == true){
					$checkFile = true;

					//파일 읽기 
					while(($readFile = readdir($opendir)) != false){
						//해당 파일이 있다면 변수 $checkFile에 false를 대입 
						if($makingFileName == $readFile){
							$checkFile = true;
							echo "해당 파일명은 이미 사용되고 있습니다.";
							break;
						}
					}
					if($checkFile == true){
						//임시 저장된 파일을 우리가 저장할 위치 및 파일명으로 옮김
						$imageUpload = move_uploaded_file($myTempFile, $myFile);

						//업로드 성공 여부 확인 
						if($imageUpload == true){
							echo "중복된 파일명이 없어 정상적으로 업로드 외었습니다.";
							echo "<img src='{$myFile}' width='200'/>";
						} else {
							echo "파일 업로드가 실패했습니다.";
						}
					}
				} else {
					//폴더를 열지 못했을 때
					echo "해당 폴더를 열지 못했습니다.";
				}
			}

		} else {
			//이미지 확장자 파일이 아닌 경우 
			echo "이미지 확장자 파일이 아닙니다.";
			exit;
		}

	} else {
		//이미지 유형이 이미지가 아닌 경우 
		echo "이미지 파일이 아닙니다.";
		exit;
	}
?>




</body>
</html>