<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<<<<<<< Updated upstream
<div>
<<<<<<< Updated upstream
=======

>>>>>>> Stashed changes
<div class="header">
	<h2>Register</h2>
</div>

=======
>>>>>>> Stashed changes
<form method="post" action="register.php">
	<?php echo display_error(); ?>
<<<<<<< Updated upstream
</form>
<form method="post" action="register.php">
<<<<<<< Updated upstream
	<div class="input-group">
=======
<div class="input-group">
>>>>>>> Stashed changes
		<label>Username</label>
		<input type="text" name="username" value="<?php echo $username; ?>">
=======
	
	<div class="input-group row">
		<div class="col-2"><label>Username</label></div>
		<div class="col-8"><input type="text" name="username" value="<?php echo $username; ?>"></div>
>>>>>>> Stashed changes
	</div>
	<div class="input-group">
		<div class="col-2"><label>Email</label></div>
		<div class="col-8"><input type="email" name="email" value="<?php echo $email; ?>"></div>
	</div>
	<div class="input-group">
		<div class="col-2"><label>Password</label>
		<div class="col-8"><input type="password" name="password_1"></div>
	</div>
	<div class="input-group">
		<div class="col-2"><label>Confirm password</label></div>
		<div class="col-8"><input type="password" name="password_2"></div>
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Register</button>
	</div>
	<p>
		Already a member? <a href="login.php">Sign in</a>
	</p>
</div>
</form>
</body>
</html>