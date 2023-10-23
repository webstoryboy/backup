&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
	&lt;meta charset="UTF-8"&gt;
	&lt;title&gt;Document&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
	&lt;?php

		$pattern = '/^(010|011|016|017|018|019)-[0-9]{3,4}-[0-9]{4}$/';

		$myPhone = '010-7112-2049';

		if(preg_match($pattern, $myPhone, $matches)){
			echo "휴대폰 번호로 입력한 값 {$myPhone}은 사용할 수 있습니다.";
			echo "&lt;pre&gt;";
			var_dump($matches);
		} else {
			echo "사용할 수 없는 번호입니다.";
		}

	?&gt;
&lt;/body&gt;
&lt;/html&gt;