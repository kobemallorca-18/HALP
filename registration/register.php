<?php include('functions.php') ?>
<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container-sm">

<div class="header">
	<h2>Register</h2>
</div>

<form method="post" action="register.php">
	<?php echo display_error(); ?>
	<div class="input-group row">
		<div class="col-2"><label>Username</label></div>
		<div class="col-12"><input type="text" name="username" value="<?php echo $username; ?>"></div>
	</div>
	<div class="input-group row">
		<div class="col-2"><label>Email</label></div>
		<div class="col-12"><input type="email" name="email" value="<?php echo $email; ?>"></div>
	</div>
	<div class="input-group row">
		<div class="col-2"><label>Password</label></div>
		<div class="col-12"><input type="password" name="password_1" value="<?php echo $password_1; ?>"></div>
	</div>
	<div class="input-group row">
		<div class="col-2"><label>Confirm password</label></div>
		<div class="col-12"><input type="password" name="password_2" value="<?php echo $password_2; ?>"></div>
	</div>
	<div class="input-group mx-auto" style="text-align: center;">
		<button type="submit" class="btn" name="register_btn">Register</button>
		<p>
		Already a member? <a href="login.php">Sign in</a>
		</p>
	</div>
	
</div>
</form>
</body>
</html>