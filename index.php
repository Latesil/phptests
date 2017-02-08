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

<iframe width="560" height="315" src="https://www.youtube.com/embed/2YM-qQrXwcg" frameborder="0" allowfullscreen></iframe>

<?php
echo "<form method='POST' action='".set_comments($conn)."'>
	<input type='hidden' name='uid' value='Anonymous'>
	<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
	<textarea name='message'></textarea><br>
	<button type='submit' name='commentSubmit'>Comment</button>
</form>";

get_comments($conn);

?>

</body>
</html>