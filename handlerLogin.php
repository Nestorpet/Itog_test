<?php

$email = $_POST['email'];
$pass = $_POST['pass'];
$mysqli = new mysqli('localhost', 'root', '', 'f_school');
$result = $mysqli->query("SELECT * FROM users WHERE email='$email' AND pass='$pass'");
$row = $result->fetch_assoc();
var_dump($row);
