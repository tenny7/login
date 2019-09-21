<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <script
  src="https://code.jquery.com/jquery-3.3.1.js"
   ></script>
</head>
<body>
    <div class="login-reg-panel">
        <div class="login-info-box">
            <p class="sign-in">Sign In</p>
            <p>Already a member? Click the button below to Log in.</p>
            <label id="label-register" for="log-reg-show">Login</label>
            <input type="radio" name="active-log-panel" id="log-reg-show"  checked="checked">
        </div>
        <div class="register-info-box">
            <p class="sign-up">Sign Up Now!</p>
            <p>Want to join us? You can sign up by clicking the button below</p></p>
            <a href= "signup.php" id="label-login" for="log-login-show">Register</a>
            <input type="radio" name="active-log-panel" id="log-login-show">
        </div>


        <div class="white-panel">
            <form action="login.php" method="post">
            <div class="login-show">
                <p class="sign-in">Sign In</p>
                <p>Kindly input your details to access your account</p>
                <div class="form-group">
                <input type="text"name="email" placeholder="Email" class="form-control" value="<?php echo $email; ?>">
               
                </div>
                <div class="form-group">
                <input type="password" name="password" placeholder="Password" class="form-control">
               
                </div>
                <input type="submit" value="Login"><br/>
                <a href="#">Forgot password?</a>
            </div>
            </form>
        </div>
    </div>
  <script src="js/javascript.js"></script>
</body>
</html>
