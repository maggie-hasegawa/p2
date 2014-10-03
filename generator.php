<!DOCTYPE html>
<html>
	<head>
		<title>Maggie's Password Generator</title>
		<?php require 'logic.php'; ?>
		<link rel='stylesheet' href="css/bootstrap.min.css" type='text/css'>
		<link rel='stylesheet' href="css/style.css" type='text/css'>
		<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<a href="/index.php"><h1>XKCD Password Generator</h1></a>
			<form method='GET' action='/generator.php'>
				<label>How many words? </label>
				<input type="text" name="count" id="count" size="5" value="<?php echo $count;?>"/> (Min 2, Max 10)<br>
				<label>Add numbers</label>
				<input type="checkbox" name="number" id="number" <?php if(isset($_GET['number'])) echo "checked='checked'"; ?> /><br>
				<label>Add symbols</label>
				<input type="checkbox" name="symbol" id="symbol" <?php if(isset($_GET['symbol'])) echo "checked='checked'"; ?> /><br>
				<input type="submit" class="btn btn-default" value="GET YOUR PASSWORD!"/>
			</form>
			<div id="password">
				<span>YOUR PASSWORD: </span><br>
								
				<?php 
					foreach($pw as $value){
 						echo $words[$value]." ";
					}
				?>
			</div>
		</div>
	</body>
</html>