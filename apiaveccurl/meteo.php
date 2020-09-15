<?php 
require 'class/Meteo.php';
$meteo= new Openweather('57a5540700ea61767bd5ee716fe5f0ae');
$forecast= $meteo->getforcecast('london,uk');

 








?>