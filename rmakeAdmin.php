<?php

$username = $_GET['id'];
include 'C:\xampp\htdocs\MMA-Event-Tracker\phpIncluda\usera.php';



$usera = new Userdb();

$usera->makeAdmin($username);

header("location:UserDB.php");


?>