<?php
	include 'header.php';
?>

<?php
	
	$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	if (strpos($url, 'error=empty') !== false) {
		echo "Fill out all fields!";
	} elseif (strpos($url, 'error=username') !== false) {
		echo "Username already exists!!";
	}
	
	if (isset($_SESSION['id'])) {
		echo $_SESSION['id'];
	} else {
		echo "You are not logged in!";
	}
?>

<br><br><br>
<?php
	if (isset($_SESSION['id'])) {
		echo "You are already logged in!";
	} else {
		echo "<form action='includes/signup.inc.php' method='POST'>
			<input type='text' name='first' placeholder='firstname'><br>
			<input type='text' name='last' placeholder='lastname'><br>
			<input type='text' name='uid' placeholder='username'><br>
			<input type='password' name='pwd' placeholder='password'><br>
			<button type='submit'>SIGNUP</button>
			</form>";
		}
?>


</body>
</html>