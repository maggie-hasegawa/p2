<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>
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
			<h1>XKCD Password Generator</h1>
			<form method='POST' action='index.php'>
				<label>How many words? </label>
				<input type="text" name="count" id="count" size="5"/> (Max 10)<br>
				<label>Add a number</label>
				<input type="checkbox" name="number" id="number"/><br>
				<label>Add a symbol</label>
				<input type="checkbox" name="symbol" id="symbol"/><br>
				<input type="submit" class="btn btn-default" value="Get your password!"/>
			</form>
			<div id="password">
				<span>YOUR PASSWORD: </span><br>
								
				<?php 
				echo $words[$pw[0]] . "-" . $words[$pw[1]] . "-" . $words[$pw[2]] . "-" . $words[$pw[3]] . "-" . $words[$pw[4]];			
				?>

			</div>
			<div id="comic-pic" target="_blank" title="xkcd.com/936/">
				<a href=" http://xkcd.com/936/">the comic that started it all</a><br>
				<img src="http://imgs.xkcd.com/comics/password_strength.png"/>
			</div>
		</div>
	</body>
</html>