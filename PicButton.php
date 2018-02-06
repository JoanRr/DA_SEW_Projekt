<?php
	shell_exec("/var/www/html/dhtsensor/take_pic.sh");
	header('Location: /dhtsensor/index.php');
?>
