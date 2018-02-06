<?php
	shell_exec("/var/www/html/dhtsensor/take_vid.sh");
	header('Location: /dhtsensor/index.php');
?>
