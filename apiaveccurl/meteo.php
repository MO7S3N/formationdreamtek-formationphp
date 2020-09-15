<?php 
require 'class/Meteo.php';
$meteo= new Openweather('57a5540700ea61767bd5ee716fe5f0ae');
$forecast= $meteo->getforcecast('Montpellier,fr');
require 'elements/header.php'; ?>

<div class="container">
    <ul>
        <li>03/02/2020 ciel degege 20C</li>
    </ul>
</div>





<?php require 'elements/footer.php'; ?>