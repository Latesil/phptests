<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style.css">
<title>title</title>

</head>
<body>

<header>
	<nav>
		<ul>
			<li><a href="index.php">HOME</a></li>
			<?php
				if (isset($_SESSION['id'])) {
					echo "<form action='includes/logout.inc.php'>
					<button>LOGOUT</button>
					</form>";
				} else {
					echo "<form action='includes/login.inc.php' method='POST'>
					<input type='text' name='uid' placeholder='username'>
					<input type='password' name='pwd' placeholder='password'>
					<button type='submit'>LOGIN</button>
				</form>";
				}
			?>
			<li><a href="signup.php">SIGNUP</a></li>
			<li><a href="contact.php">CONTACT</a></li>
		</ul>
	</nav>
</header>