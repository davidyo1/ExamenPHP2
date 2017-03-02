<?php
	echo '<h3>Login</h3>';
	echo '<form method="post" action="login.php">';
	echo '<input type="text" name="user"/>';
	echo '<br/>';	
	echo '<input type="password" name="pass"/>';
	echo '<input type="submit"/>';
	echo '<br/>';
	echo '</form>';

	session_start();
	if (isset($_POST['register'])){
		
		Location("header:menu.php");
		
	}

?>