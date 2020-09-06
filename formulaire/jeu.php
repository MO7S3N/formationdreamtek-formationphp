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
$supplement=[
    'pepite de chocolat'=>1,
    'chantille'=>0.5
];

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
<form action="jeu.php" method="GET">
    <?php foreach($parfums as $parfum => $prix): ?>
    <div class="checkbox">
        <label>
        <?php checkbox ('parfum', $parfum , $_GET); ?>
        <?php  echo $parfum; ?> - <?php echo $prix; ?> £
        </label>
    </div>    
    <?php endforeach; ?>   
    <button type="submit">composer ma classe </button>
</form>

<pre>
<?php var_dump($_GET);  ?>
</pre>



<?php
require 'footer.php';
?>
