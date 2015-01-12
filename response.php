<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo "$pageName" ; ?></title>
	</head>
	<body onload="timer=setTimeout(function(){ window.location='response.php';}, 5000)">

<?php
		if($_GET["status"] == "thanks"){
		
		echo "Thanks";

		} else{
			echo "sorry";
		}

?>
	</body>
</html>