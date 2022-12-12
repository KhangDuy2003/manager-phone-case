<?php
	 if (isset($_COOKIE['USERNAME'])) {
		unset($_COOKIE['USERNAME']); 
		setcookie('USERNAME', null, -1, '/'); 
	}
	if (isset($_COOKIE['ROLE'])) {
		unset($_COOKIE['ROLE']); 
		setcookie('ROLE', null, -1, '/'); 
	}
    require_once __DIR__ . "/../view/login.php";
?>