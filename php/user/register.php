<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/login.css"/>
    <title>Register | Bloggme</title>
</head>
<body>
<div class="main">
    <p class="sign" align="center">Sign Up</p>
    <form class="form1" method="post" action="register.php">
	<?php include('errors.php'); ?>
      <input class="un" type="text" align="center" name="username" value="<?php echo $username; ?>" placeholder="Username">
      <input class="un" type="email" align="center" name="email" value="<?php echo $email; ?>" placeholder="UserEmail">
      <input class="pass" type="password" align="center" name="password_1" placeholder="Password">
      <input class="pass" type="password" align="center" name="password_2" placeholder="confirm-Password">
      <button type="submit" class="submit" name="reg_user" align="center">Sign in</button>
      <p class="navigator" align="center"><a href="login.php">Login Here</a> </p>
                 
    </div>

</body>
</html>