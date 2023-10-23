&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
	&lt;meta charset="UTF-8"&gt;
	&lt;title&gt;Document&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
	&lt;?php
		$earth = array();

		$earth['nation'][0] = 'korea';
		$earth['nation'][1] = 'america';
		$earth['nation'][2] = 'canada';
		$earth['nation'][3] = 'japan';
		$earth['nation'][4] = 'china';
		$earth['nation'][5] = 'france';

		//배열의 내용을 보여줍니다.
		var_dump($earth);

		echo "&lt;br&gt;&lt;br&gt;";
		echo $earth['nation'][4];
	?&gt;
&lt;/body&gt;
&lt;/html&gt;







