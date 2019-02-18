<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="./styles/frontPage.css">
	</head>	
	<body>
		<?php
			if(isset($_POST['name'])){	
				echo '<div class = "submission form">';
				echo '<h1> Hello'.$_POST['name'].', '.date("Y/m/d").'</h1>';
				echo '</div>';
			}else{
		?>
				<div class = "submission form">		
					<form action="" method= "POST">
						<input type="text" name="name" placeholder="Please enter your name..">
						<input type="submit" valuue= "Submit">		
					</form>
				</div>
		<?php	} ?>

	</body>
</html>