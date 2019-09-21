

 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hi <?php echo $_GET['email'] ?>! <b></b> Welcome to our HNGi6.0 TEAM GREATS.</h1>
    </div>
    <p>
        <!-- <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a> -->
        <a href="http://localhost/teamgreats/logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
</body>

</html>