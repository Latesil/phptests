<?php
	include 'header.php';
	include 'dbh3.php';
	include 'comments.inc.php';

	if (isset($_SESSION['id'])) {
		echo $_SESSION['id'];
	} else {
		echo "";
	}
	
	date_default_timezone_set('Europe/Moscow');
?>

<?php
$uid = $_POST['uid'];
$cid = $_POST['cid'];
$date = $_POST['date'];
$message = $_POST['message'];

echo "<form method='POST' action='".edit_comments($conn)."'>
	<input type='hidden' name='cid' value='".$cid."'>
	<input type='hidden' name='uid' value='".$uid."'>
	<input type='hidden' name='date' value='".$date."'>
	<textarea name='message'>".$message."</textarea><br>
	<button type='submit' name='commentSubmit'>Edit</button>
</form>";

?>

</body>
</html>