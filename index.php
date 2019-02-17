<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="./styles/frontPage.css">
	</head>	
	<body>
		<?php
			if(isset($_POST['name'])){				
				echo $_POST['name'];
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