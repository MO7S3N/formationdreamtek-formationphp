<?php require_once 'menu_functions.php'; ?>
<?php require_once 'functions/auth.php';      ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>
                 <?php
                if(isset($title))
                   { 
                       echo $title;
                   }
                 else 
                 {
                    echo 'mon site'; 
                 }   
                 ?>
    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  </head>

  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
  <a class="navbar-brand" href="#">Mon blog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
        <?php
        nav_menu('nav-link');
        ?>
    </ul>
    <ul class="navbar-nav">
        <?php if(est_connecte()): ?>
          <li class="nav_item">
            <a href="logout.php" class="nav-link">Se deconnecter</a>
          </li>
        <?php endif; ?>
    </ul>
  </div>
</nav> 