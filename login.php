<?php

//Intro - start session and require file for connection
session_start();
require_once "connect.php";

$connection = @new mysqli($host, $db_user, $db_password, $db_name);

$email_username = $_POST['inputEmail'];
$password = $_POST['inputPassword'];







?>