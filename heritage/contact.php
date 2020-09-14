<?php 
session_start();
$title="nous contacter";
require_once 'data/config.php';
require 'functions.php';
date_default_timezone_set('Europe/Paris');
$heure=(int)date('G');
$creneaux=CRENAUX[date('N')-1];
$ouvert=in_creneaux($heure, $creneaux);
$color='green';
if($ouvert)
{
    $color='green';
}
else
{
    $color='red';
}
if(!$ouvert)
{
     $color  = 'red';
}
require 'elements/header.php'; 

?>

<div class="row">
  <div class="col-md-8">
  <h2>nous contacter</h2>
  <p>kalamnaa</p>
  </div>
  <div class="col-md-4">
  <h2>Horaire d'ouverture</h2>
  <form action="" method="GET">
      <div class="from-group">
          <select name="jour" class="form-control">
              <?php foreach(JOURS as $k => $jour): ?>
                 <option value="<?php echo $k; ?>"><?php echo $jour; ?></option> 
              <?php endforeach; ?>
          </select>
      </div>
      <div class="form-group">
          <input class="form-control" type="number" name="heure" value="<?php echo $heure; ?>">
      </div>
    <button class="btn btn-primary" type="submit">voir si le magasin est ouvert</button>
  </form>
  <?php if($ouvert): ?>
     <div class="alert alert-success">
         Le magasin est ouvert
     </div>
  <?php else: ?>
     <div class="alert alert-danger">
         Le magasin est fermé
     </div>
  <?php endif; ?>
     <ul>
        <?php foreach(JOURS as $k=>$jour):?>
        <li <?php if($k+1==(int)date('N')): ?> style ="color:green;"><?php endif; ?>
            <strong><?php echo $jour; ?></strong> :
        <?php echo creneaux_html(CRENAUX[$k]);?>
        </li>
        <?php endforeach; ?>
     </ul>
  </div>

</div>







<?php require 'elements/footer.php'; ?>