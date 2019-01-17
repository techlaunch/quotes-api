<?php 

// include the quotes
include "model.php";

// enable cors policy so apps can fetch
header("Access-Control-Allow-Origin: *");

// display the JSON
echo $quotesJSON;
