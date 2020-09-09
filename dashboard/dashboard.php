<?php
require 'functions/compteur.php';
$total= nombres_devues();
$annee=(int)date('Y');
require 'elements/header.php'; ?>

<div class="row">
    <div class="col-md-4">
        <div class="list-group">
            <?php for($i=0;$i<6;$i++): ?>
            <a class="list-group-item active" href="dashboard.php?annee=<?php echo $annee- $i; ?>"><?php echo $annee- $i; ?></a>
            <?php endfor; ?>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
            <strong style="font-size:3em;"><?php echo $total; ?></strong>
            visite<?php if($total > 1)  echo 's'; else echo ''; ?> total
       </div>
   </div>
</div>


<?php require 'elements/footer.php';?>