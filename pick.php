<?php

// get the ID passed
$id = isset($_GET['id']) ? $_GET['id'] : false;
if( ! $id) die("You must pass a quote ID by adding: pick.php?id=ID");

// include the quotes
include "model.php";

// get the quotes as an array
$quotes = json_decode($quotesJSON);

// check if the ID is valid
if( ! is_numeric($id) || $id < 0 || $id > count($quotes)) die("The quote ID is invalid");

// find and echo the right quote
foreach ($quotes as $quote) {
	if($quote->id == $id) {
		echo json_encode($quote);
		break;
	}
}
