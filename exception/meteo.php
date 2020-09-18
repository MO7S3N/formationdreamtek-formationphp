<?php 
require 'class/Meteo.php';
$meteo= new Openweather('57a5540700ea61767bd5ee716fe5f0ae');
$forecast= $meteo->getforcecast('Montpellier,fr');
require 'elements/header.php'; ?>

<div class="container">
    <ul>
        <?php foreach($forecast as $day): ?>
        <?php $date = new DateTime("@" . $day['dt']); ?>
        <li><?php echo $date->format('d/m/Y'); ?> <?php echo $day['weather'][0]['description']; ?></li>
         <?php endforeach; ?>
    </ul>
</div>





<?php require 'elements/footer.php'; ?>