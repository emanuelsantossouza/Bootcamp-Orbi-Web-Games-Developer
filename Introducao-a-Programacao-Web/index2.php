<html>
	<head>
	
		<title>Meu primeiro site em PHP!! Woohoo!!</title>
		
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
		
		<style type="text/css">
			.linha {
				font-weight: bold;
				color: red;
				padding-left: 10px;
				line-height: 50px;
			}
		</style>	
	</head>
	
	<body>
		
		<?php
			for ($i = 0 ; $i < 10 ; $i++ ) {
				print( "<span class=\"linha\">linha número " . $i . "</span><br />");
			}
		?>
		
	</body>
	
	<script type="text/javascript">
		$(document).ready(function() {
			alert("woohoo!");
		});
	</script>
</html>