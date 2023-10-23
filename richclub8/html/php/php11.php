&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
	&lt;meta charset="UTF-8"&gt;
	&lt;title&gt;Document&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
	&lt;?php
		$str = " 안녕하세요. ";

		//trim 사용하지 않고 출력
		echo "trim 사용하지 않고 출력 &lt;br&gt;";
		echo "|".$str."|";

		echo "&lt;br&gt;&lt;br&gt;";

		//trim 사용
		echo "trim 사용 &lt;br&gt;";
		echo "|".trim($str)."|";
	?&gt;
&lt;/body&gt;
&lt;/html&gt;