<?php
session_start();

$servername = "localhost";
$user = "root";
$passwd = "";
$dbname = "docusers";

$conn = mysqli_connect($servername, $user, $passwd, $dbname);

if(!$conn){
	die("Connection Failed: ");
}