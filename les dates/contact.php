<?php 
$title="nous contacter";
require_once 'config.php';
require 'functions.php';
$creneaux= creneaux_html(CRENAUX);
require 'header.php';

?>

<div class="row">
  <div class="col-md-8">
  <h2>nous contacter</h2>
  <p>kalamnaa</p>
  </div>
  <div class="col-md-4">
    <?php echo $creneaux; ?>
  </div>

</div>







<?php require 'footer.php'; ?>