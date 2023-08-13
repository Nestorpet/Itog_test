<?php

echo '<pre>';
//print_r($_POST);
$email = $_POST['email'];
$pass = $_POST['pass'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$mysqli = new mysqli('localhost', 'root', '', 'f_school');

$mysqli->query("INSERT INTO users (name, lastname, email, pass) 
                VALUES ('$name', '$lastname', '$email', '$pass')");
echo "Успешно зарегистрирован";
