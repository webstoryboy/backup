<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<title>signup</title>

	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div id="wrap">
		<header class="header">
			<div class="back">
				<span class="ir_pm">뒤로</span>
			</div>
		</header>
		<section class="signup">
			<div class="container">
				<div class="row">
					<div class="signup_top">
						<h1>Sign up</h1>
						<p>Create an account to use S&A <em>without limits.</em></p>
					</div>
					<div class="signup_in">
						<div>
							<label class="ir_su" for="userName">이름</label>
							<input type="text" name="userName" id="userName" class="inputStyle1" placeholder="Name" />
						</div>
						<div>
							<label class="ir_su" for="userEmail">이메일</label>
							<input type="text" name="userEmail" id="userEmail" class="inputStyle1" placeholder="Email address" />
						</div>
						<div>
							<label class="ir_su" for="userPw">패스워드</label>
							<input type="text" name="userPw" id="userPw" class="inputStyle1" placeholder="Password" />
						</div>
						<div class="selectBox">
	                        <div>
	                        	<label class="ir_su" for="birthYear">연도</label>
	                            <select name="birthYear" id="birthYear" class="selectStyle1">
	                                <option value="">Birth date</option>
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
	                        <div>
	                        	<label class="ir_su" for="birthMonth">월</label>
	                            <select name="birthMonth" id="birthMonth" class="selectStyle1">
	                                <option value="">Month</option>
									<?php
									    for($i=1; $i<=12; $i++){?>
									        <option value="<?=$i?>"><?=$i?></option>
									<?php 
									    }
									?>
	                            </select>
	                        </div>
	                        <div>
	                        	<label class="ir_su" for="birthDay">일</label>
	                            <select name="birthDay" id="birthDay" class="selectStyle1">
	                                <option value="">Day</option>
									<?php
									    for($i=1; $i<=31; $i++){?>
									        <option value="<?=$i?>"><?=$i?></option>
									<?php 
									    }
									?>    
								</select>     
							</div>
						</div>
						<div class="genderSelect">
							<div id="genderLabel">
								<label for="gW" id="gMW" class="active">여성</label>
								<label for="gM" id="gMM">남성</label>
							</div>
							<input type="radio" name="gender" class="ir_su" id="gW" value="w" />
							<input type="radio" name="gender" class="ir_su" id="gM" value="m" />
						</div>
						<div class="error">
	                        <p id="valueError">Check your ID, try again</p>
	                    </div>
	                    <div class="submitBox">
	                    	<label class="ir_su" for="signUpSubmit">가입하기</label>
                            <input type="submit" id="signUpSubmit" value="Sign up" class="buttonStyle1" />
                        </div>
                        <div class="ready">
                        	<p>I already have an account. <a href="login.php">Login</a></p>
                        </div>
					</div>
				</div>
			</div>
		</section>
	</div>
</body>
</html>