<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<header>
<h1>HNGi6.0 TEAM GREATS</h1>
</header>
    <div class="login-reg-panel">
		<div class="register-info-box">
            <p class="sign-up">Sign Up Now!</p>
             <p>Already a member? Click the button below to Log in.</p>
            <a href="index.php" id="label-login" for="log-login-show">Login</a>
            <input type="radio" name="active-log-panel" id="log-login-show">
        </div>
		
		<div class="white-panel">
			<form action="register" method="post">
					<h2 class="sign-up">Sign Up</h2>
					<p>Please fill this form to create an account.</p>
			
					<div class="form-group">
						<input type="text" name="name" width="80%" placeholder="Full name" class="form-control" value="">
						
					</div>    
					<div class="form-group">
					<input type="text" name="email" placeholder="Email address" class="form-control" value="">
						
					</div>    
					<div class="form-group">
						
						<input type="password" name="password" placeholder="Password" class="form-control" value="">
						
					</div>
					<div class="form-group">
						<input type="password" name="confirm_password" placeholder="Confirm Password" class="form-control" value="">
					
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary" value="Submit">
						<input type="reset" class="btn btn-default" value="Reset">
					</div>
			</form>
    </div>    
	</div>
</body>
</html>