<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<title>login</title>

	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div id="wrap">
		<header class="header">
			
		</header>
		<section class="signup">
			<div class="container">
				<div class="row">
					<div class="signup_top">
						<h1>Hello</h1>
						<p>You can use your <em>Fingerprint</em> to grant access to the app.</p>
					</div>
					<div class="signup_in">
						<div>
							<label class="ir_su" for="userEmail">이메일</label>
							<input type="text" name="userEmail" id="userEmail" class="inputStyle1" placeholder="Email address" />
						</div>
						<div>
							<label class="ir_su" for="userPw">패스워드</label>
							<input type="text" name="userPw" id="userPw" class="inputStyle1" placeholder="Password" />
						</div>
						
						<div class="error">
	                        <p id="valueError">Check your ID, try again</p>
	                    </div>
	                    <div class="submitBox">
	                    	<label class="ir_su" for="signUpSubmit">로그인하기</label>
                            <input type="submit" id="signUpSubmit" value="Log in" class="buttonStyle1" />
                        </div>
                        <div class="ready">
                        	<p>Still without account? <a href="singup.php">Create one</a></p>
                        </div>
					</div>
				</div>
			</div>
		</section>
	</div>
</body>
</html>