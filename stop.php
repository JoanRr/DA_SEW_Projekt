<?php
	echo "Button Click";
	shell_exec("/var/www/html/dhtsensor/stop_stream.sh");
	header('Location: /dhtsensor/index.php');
?>
