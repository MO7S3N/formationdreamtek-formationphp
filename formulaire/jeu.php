<?php require 'functions.php'; ?>

<?php 
$adeviner=150;
$erreur=null;
$succes=null;
$value=null;
if(isset($_GET['chiffre']))
{
        if ($_GET['chiffre'] > $adeviner)
        {
            $erreur="votre chiffre est petit";
        }
        elseif($_GET['chiffre'] <$adeviner)
        {
             $erreur="votre chiffre est petit";
        }
        else
        {                  
            $succes='bravo!';
        }
        $value=(int)$_GET['chiffre'];
}

//checkbox
$parfums=[
    'fraise'=>4,
    'vanille'=>5,
    'chocolat'=>6
];

//radio
$cornets=[
    'pot'=>2,
    'cornet'=>3
];
//checkbox
$supplements=[
    'pepite de chocolat'=>1,
    'chantille'=>0.5
];

$ingredients=[];
$total=0;
if (isset($_GET['parfum']))
{
    foreach($_GET['parfum'] as $parfum)
     {
         if(isset($parfums[$parfum]))
          {
              $ingredients[]=$parfum;
              $total += $parfums[$parfum];
          }
     }

}

if (isset($_GET['supplement']))
{
    foreach($_GET['supplement'] as $supplement)
     {
         if(isset($supplements[$supplement]))
          {   
              $ingredients[]=$supplement;
              $total += $supplements[$supplement];
          }
     }

}

if (isset($_GET['cornet']))
{   
    $cornet=$_GET['cornet'];
     {
         if(isset($cornets[$cornet]))
          {
              $ingredients[]=$cornet;
              $total += $cornets[$cornet];
          }
     }
}

require 'header.php';
?>

<?php
if($erreur):
?>

    <div class="alert alert-danger">
    <?php
     echo $erreur;
    ?>
    </div>

<?php
elseif($succes):
?>
    <div class="alert alert-success">
    <?php echo $succes; ?>
    </div>
<?php endif; ?>    



<h1>composer votre glace</h1>
<div class="row">
   <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">votre glace</h5>
                    <ul>
                    <?php foreach($ingredients as $ingredient):?>
                    <li><?php echo $ingredient; ?></li>
                    <li><?php echo $total; ?></li>
                    <?php
                    endforeach ;
                    ?>
                    </ul>
            </div>
        </div>
   </div> 
   <div class="col-md-8">
        <form action="jeu.php" method="GET">
            <h2>choisissez votre parfum</h2>
            <?php foreach($parfums as $parfum => $prix): ?>
            <div class="checkbox">
                <label>
                <?php checkbox ('parfum', $parfum , $_GET); ?>
                <?php  echo $parfum; ?> - <?php echo $prix; ?> £
                </label>
            </div>    
            <?php endforeach; ?>   
            <h2>choisissez votre cornet</h2>
            <?php foreach($cornets as $cornet =>$prix): ?>
            <div class="radio">
                <label>
                <?php radio ('cornet', $cornet , $_GET); ?>
                <?php  echo $cornet; ?> - <?php echo $prix; ?> £
                </label>
            </div>    
            <?php endforeach; ?>   
            <h2>choisissez votre supplement</h2>
            <?php foreach($supplements as $supplement =>$prix): ?>
            <div class="ckeckbox">
                <label>
                <?php checkbox ('supplement', $supplement , $_GET); ?>
                <?php  echo $supplement; ?> - <?php echo $prix; ?> £
                </label>
            </div>    
            <?php endforeach; ?>   

            <button type="submit" class="btn btn-primary">composer ma classe </button>
        </form>
   </div>
</div>

<pre>
<?php var_dump($_GET);  ?>
</pre>



<?php
require 'footer.php';
?>
