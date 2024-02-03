<?php

$id = $_GET['id'];
include 'C:\xampp\htdocs\zTmijat\MMA-Event-Tracker\phpIncluda\eventat.php';



$event = new Eventdb();

$event->deleteEvent($id);

header("location:EventDB.php");


?>