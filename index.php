<html>
	<head>
	<meta charset="utf-8">
        <meta http="X-UA-Compatible" content="IE=edge">
	
	<title>DA_SEW_Projekt</title>
	
	</head>
	<body>
	<form action ="" method="post" name="form1">
	<input type = "submit" value="Motor Control" onclick="calC();"/>
	</form>

        <script type = "text/javascript">
	function calC()
        {
        document.form1.action = "MotButton.php";
        }
        </script>

	<a href="/dhtsensor/MotButton.php/">Take Photo</a>
	
	<div id="show"></div>
	<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
        <script type="text/javascript">
                $(document).ready(function callG() {
                        setInterval(function callG() {
                                $('#show').load('sensor.php');
                        }, 3000);
                });
        </script>

	</body>
</html>
