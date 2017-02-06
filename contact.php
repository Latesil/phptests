<?php
	include 'header.php';
?>

<ul>
	<li><a href="index.php">HOME</a></li>
	<li><a href="contact.php">CONTACT</a></li>
</ul>
<?php
	if (isset($_SESSION['id'])) {
		echo $_SESSION['id'];
	} else {
		echo "You are not logged in!";
	}
?>
</body>
</html>