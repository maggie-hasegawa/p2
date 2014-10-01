<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Maggie's Password Generator</title>
		<link rel='stylesheet' href="css/bootstrap.min.css" type='text/css'>
		<script src="js/bootstrap.min.js"></script>
		<style type="text/css">

			body {
				font-family: trebuchet;
				background-color: #45AAB8;
			}

			.container {
				text-align: center;
				background-color: white;
			}

			h1 {
				margin-bottom: 25px;
				color: #45AAB8;
			}

			#password {
				width: 70%;
				margin: 20px;
				padding: 15px;
				text-align: center;
				margin-left: auto;
				margin-right: auto;
				border: 5px solid #FAF4B1;
				background-color: #45AAB8;
				font-weight: bold;
				font-size: 2em;
				color: #E1D772;
			}

			.btn {
				margin: 10px;
				font-weight: bold;
				border: solid #45AAB8;
			}

		</style>
	</head>
	<body>
		<div class="container">
			<h1>XKCD Password Generator</h1>
			<form>
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
				<span></span>
			</div>
			<div id="comic-pic" target="_blank" title="xkcd.com/936/">
				<a href=" http://xkcd.com/936/">the comic that started it all</a><br>
				<img src="http://imgs.xkcd.com/comics/password_strength.png"/>
			</div>
		</div>
	</body>
</html>