<?php
require 'functions/compteur.php';
$annee=(int)date('Y');
$annee_selection = empty($_GET['annee']) ?  $annee : (int) $_GET['annee'];
$mois_selection=empty($_GET['mois']) ?  date('m') :  $_GET['mois'];
if($annee_selection && $mois_selection)
{
    $total=nombres_devues_mois($annee_selection,$mois_selection);
    $detail=nombres_devues_detail_mois($annee_selection,$mois_selection);

}

else
{
    $total=nombres_devues();
}
$mois = [
    '01' => 'JANVIER',
    '02'   =>'FEVRIER',
    '03'   =>'MARS',
    '04'   =>'AVRIL',
    '05'   =>'MAY',
    '06'   =>'JUIN',
    '07'   =>'JUILLET',
    '08'   =>'AOUT',
    '09'   =>'SEPTEMBRE',
    '10'   =>'OCTOBRE',
    '11'   =>'NOVEMBER',
    '12'   =>'DECEMBRE'
]; 


require 'elements/header.php'; ?>

<div class="row">
    <div class="col-md-4">
        <div class="list-group">
            <?php for($i=0;$i<6;$i++): ?>
            <a class="list-group-item 
            <?php 
            if(($annee - $i) == $annee_selection)
            {
                 echo'active';
            }
            else
            {
                echo '';
            }    
            ?>"  href="dashboard.php?annee=<?php echo $annee- $i; ?>"><?php echo $annee- $i; ?></a>
            <?php if($annee - $i == $annee_selection): ?>
                <?php foreach($mois as $numero => $nom): ?>
                    <a href="dashboard.php?annee=<?php echo $annee_selection; ?>&mois=<?php echo $numero ;?> " class="list-group-item <?php if($numero==$mois_selection) {echo  'active' ; } else { echo '';} ?>">
                    <?php echo $nom; ?>
                    </a>
                <?php endforeach; ?>
                <?php endif; ?>
            <?php endfor; ?>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
            <strong style="font-size:3em;"><?php echo $total;?></strong>
            visite<?php if($total > 1)  echo 's'; else echo ''; ?> total
           </div>
        </div>   
        <?php if(isset($detail)) : ?>
        <h2>Details des visites pour le mois</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Jour</th>
                    <th>mois</th>
                    <th>annee</th>
                    <th>nombre de visite</th>
                </tr>
            </thead> 
            <tbody>
                <?php foreach( $detail as $ligne): ?>
                    <tr>
                        <td><?php echo $ligne['jour']; ?></td>
                        <td><?php echo $ligne['mois']; ?></td>
                        <td><?php echo $ligne['annee']; ?></td>
                        <td><?php echo $ligne['visites']; ?></td>
                    </tr>
                <?php endforeach; ?>    
            </tbody>            
        </table>    
       <?php endif; ?>      
   </div>   
</div>


<?php require 'elements/footer.php';?>