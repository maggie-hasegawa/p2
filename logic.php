<?php

$words = array('job', 'horse', 'cat', 'phone', 'tomorrow', 'color', 'sun', 'book', 'sit', 'feet', 'shoe', 'moon', 'surf', 'white', 'block');
$numbers = array('2', '5', '20', '9', '52', '36', '72', '3', '10', '15');
$symbols = array('@', '#', '$', '%', '&', '*');

$count = $_GET["count"];

if ($count == "") {
	$count = 5;
} else if ($count == 1 or $count > 10) {
	echo "<script type='text/javascript'>alert('Please enter a number between 2 and 10 to generate a password. The default password is 5 words.');</script>";
	$count = 5;
}

if (isset($_GET['number']) && isset($_GET['symbol'])) {
	$words = array_merge($words, $numbers, $symbols);
} else if (isset($_GET['number'])) {
	$words = array_merge($words, $numbers);
} else if (isset($_GET['symbol'])) {
	$words = array_merge($words, $symbols);
}

$pw = array_rand($words, $count);