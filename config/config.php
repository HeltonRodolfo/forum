<?php

// HOST
define("HOST", "localhost");

// DBNAME
define("DBNAME", "forum");

// USER
define("USER", "root");

// PASSWORD
define("PASS", "");

$conn = new PDO("mysql:host=" . HOST . ";dbname=" . DBNAME . ";", USER, PASS);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// if ($conn == true) {
//     echo "Connection is a success";
// } else {
//     echo "Error";
// }
