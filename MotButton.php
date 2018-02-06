<?php
	exec("sudo python /var/www/html/dhtsensor/moW.py");
	header('Location: /dhtsensor/index.php');
	echo "Script success";
?>
