<?php require 'elements/header.php';
$lignes=file(__DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'menu.tsv');
foreach($lignes as $k => $ligne)
{
    $lignes[$k]=explode("\t",trim($ligne)) ;
}
?>

<h1>MENU</h1>

<?php foreach($lignes as $ligne): ?>
    <?php if(count($ligne) ==1):?>
        <h2><?php echo $ligne[0]; ?></h2>
    <?php else: ?>
        <div class="row">
            <div class="col-md-sm-8">
               <p>
                    <strong><?php echo $ligne[0]; ?></strong><br>
                    <?php echo $ligne[1]; ?>
               </p> 
            </div>
            <div class="col-md-sm-4">
                <strong><?php echo $ligne[2];?>$</strong>
            </div>
        </div>     
     <?php endif;?>
<?php endforeach; ?>  
            

   
         



<?php
require 'elements/footer.php';
?> 