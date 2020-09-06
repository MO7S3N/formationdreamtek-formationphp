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

$parfums=[
    'fraise'=>4,
    'vanille'=>5,
    'chocolat'=>6
];

$cornets=[
    'pot'=>2,
    'cornet'=>3
];

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




<form action="jeu.php" method="GET">
    <div class="form-group">
    <input type="number" name="chiffre" placeholder="entre 0 et 1000" value="<?php echo $value; ?>"><br>
    <input type="text" name="demo" value="test"><br>
    <input type="checkbox" name="parfum[]" value="fraise">fraise<br>
    <input type="checkbox" name="parfum[]" value="vanille">vanille<br>
    <input type="checkbox" name="parfum[]" value="chocolat">chocolat<br>
    </div>
    <button type="submit" class="btn btn-primary">Deviner</button>
</form>

<pre>
<?php var_dump($_GET);  ?>
</pre>



<?php
require 'footer.php';
?>