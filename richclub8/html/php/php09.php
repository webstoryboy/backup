<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<select name="birthMonth" id="birthMonth">
		<?php
			//4월에 기본 선택되도록 변수 선언
			$selectMonth = 4;

			for($i=1; $i<=12; $i++){ 
				$selected = '';

				if($i == $selectMonth){
					$selected = "selected";
				}

				?>
				<option value="<?=$i?>" <?=$selected?>><?=$i?></option>
			<?php } ?>
	</select>
	<label for="birthMonth">월</label>
</body>
</html>