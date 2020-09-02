<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/login.css"/>
    <title>Login | Bloggme</title>
</head>
<body>
<div class="main-login">
    <p class="sign" align="center">Sign in</p>
    <form class="form1" method="post" action="login.php">
	<?php include('errors.php'); ?>
      <input class="un " type="text" align="center" name="username" placeholder="Username">
      <input class="pass" type="password" align="center" name="password" placeholder="Password">
      <button type="submit" class="submit" name="login_user" align="center">Sign in</button>
      <p class="forgot" align="center"><a href="register.php">Register Here</a> </p>
      <p class="forgot-pass" align="right"><a href="forgotpassword.php">Forgot Password?</p>
            
                
    </div>

</body>
</html>