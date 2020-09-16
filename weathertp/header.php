<?require 'class/OpenWeather.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>
        weather api
    </title>
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/rotating-card.css" rel="stylesheet" />
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" />
  </head>

  <body>
  <div class="card-container">
         <div class="card">
             <div class="front">
                 <div class="cover">
                     <img src="images/1.jpg"/>
                 </div>
                 <div class="user">
                 <?php foreach($forecast as $day): ?>
                     <img class="img-circle" src=" http://openweathermap.org/img/wn/<?php echo $day['weather'][0]['icon'];?>@2x.png"/>
                 </div>
                 <div class="content">
                     <div class="main">
                         <h3 class="name"><?php echo $day['name']; ?></h3>
                         <p class="profession">weather</p>
                         <?php $date = new DateTime("@" . $day['dt']); ?>
                         <p class="text-center"><?php echo $date->format('d/m/Y');  ?></p>
                         <?php endforeach; ?>
                     </div>
                     <div class="footer">
                         <div class="rating">
                             <i class="fa fa-mail-forward"></i> Auto Rotation
                         </div>
                     </div>
                 </div>
             </div> <!-- end front panel -->