<?php
	echo "Button Click";
	shell_exec("/var/www/html/dhtsensor/start_stream.sh");
	header('Location: /dhtsensor/index.php');
?>
