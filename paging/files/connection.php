<?php
// Create connection
	if (!$link = mysqli_connect('localhost', 'root', '')) {
		echo 'Could not connect to mysql';
		exit;
	}
	
	if (!mysqli_select_db($link, 'books')) {
		echo 'Could not select database';
		exit;
	}
	mysqli_query($link, "set names 'utf8'");