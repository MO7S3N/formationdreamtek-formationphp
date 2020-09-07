<?php 
$title="nous contacter";
require_once 'config.php';
require 'functions.php';
require 'header.php';

?>

<div class="row">
  <div class="col-md-8">
  <h2>nous contacter</h2>
  <p>kalamnaa</p>
  </div>
  <div class="col-md-4">
  <h2>Horaire d'ouverture</h2>
     <ul>
        <?php foreach(JOURS as $k=>$jour):?>
        <li><?php echo $jour; ?> : <?php creneaux_html(CRENAUX[$k]);?></li>
        <?php endforeach; ?>
     </ul>
  </div>

</div>







<?php require 'footer.php'; ?>