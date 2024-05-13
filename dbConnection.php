<?php
$dbname = "form1";
$username = "shrabon";
$password = "@secret";
$hostName = "localhost";

$mysqli = mysqli_connect($hostName, $username, $password, $dbname);

if (!$mysqli) {
    die("Connection Error" . $mysqli);
} else {
    echo "Connection Successful!";
}
