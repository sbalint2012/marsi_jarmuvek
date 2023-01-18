<?php
	session_start();

	session_unset();		//munkamenet valtozoinak kiuritese
	session_destroy();		//munkamenet torlese

	header("Location: index.php");
?>