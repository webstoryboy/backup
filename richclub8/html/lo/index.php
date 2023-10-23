<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width">
	<title>Document</title>
	
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">

	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet">
</head>
<body> 
	<div id="wrap">
		<header id="header">
			<div class="container">
				<div class="row">
					<div class="header">
						<h1>Sign up</h1>
						<p>Create an account to use S&A</p>
					</div>
				</div>
			</div>
		</header>
		<section id="signup">
			<div class="container">
				<div class="row">
					<div class="signup">
						<form id="signUpForm" method="post" action="./database/myMember.php">
							<div class="email"> 
						    	<label for="userEmail">EMAIL ADDRESS</label>
						    	<input name="userEmail" id="userEmail" type="text" title="이메일" class="input_style1" placeholder="Email address">
						    </div>
						    <div class="pass">
						    	<label for="userPw">PASSWORD</label>
						    	<input name="userPw" id="userPw" type="password" maxlength="20" class="input_style1" placeholder="password">
						    </div>
						    <div class="name">
						    	<label for="userName">NAME</label>
						    	<input name="userName" id="userName" type="text" maxlength="20" class="input_style1" placeholder="Name">
						    </div>
						    <div class="birth">
						    	<label>생일</label>
		                        <div class="selectBox">
		                            <select name="birthYear" id="birthYear">
		                                <option value="">연도</option>
		<?php
		    //현재 연도를 구함
		    $nowYear = date('Y',time());
		    //현재 연도부터 1900년도까지 내림차순으로 option 태그 생성
		    for($i = $nowYear; $i >= 1900; $i--){?>
		                                <option value="<?=$i?>"><?=$i?></option>
		<?php
		    }
		?>
		                            </select>
		                        </div>
		                        <div class="selectBox">
		                            <select name="birthMonth" id="birthMonth">
		                                <option value="">월</option>
		<?php
		    for($i=1; $i<=12; $i++){?>
		                                <option value="<?=$i?>"><?=$i?></option>
		<?php 
		    }
		?>
		                            </select>
		                        </div>
		                        <div class="selectBox">
		                            <select name="birthDay" id="birthDay">
		                                <option value="">일</option>
		<?php
		    for($i=1; $i<=31; $i++){?>
		                                <option value="<?=$i?>"><?=$i?></option>
		<?php 
		    }
		?>         
		                            </select>
		                        </div>
						    </div>
						    <div class="genderWrap">
		                        <div id="genderLabel">
		                            <label for="gW" id="gMW">여성</label>
		                            <label for="gM" id="gMM">남성</label>
		                        </div>
		                        <input type="radio" name="gender" class="gender" id="gW" value="w" />
		                        <input type="radio" name="gender" class="gender" id="gM" value="m" />
		                    </div>

		                    <div class="error">
		                        <p id="valueError"></p>
		                    </div>
                    		<div class="submitBtn">
                        		<input type="submit" id="signUpSubmit" value="SignUp" />
                    		</div>
                    		<input type="hidden" name="mode" value="save" />	
						</form>
					</div>
					<!-- //signup -->
				</div>
			</div>
		</section>
	</div>
	
</body>
</html>