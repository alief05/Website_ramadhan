<?php

		session_start();
		$_SESSION = [];
		session_start();
		session_destroy();

		header("Location: index.php");
		exit;

?>