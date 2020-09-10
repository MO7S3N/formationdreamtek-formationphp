<?php 
$email=null;
$error=null;
$success=null;

if(!empty($_POST['email']))
{
   $email=$_POST['email'];
   if (filter_var($email, FILTER_VALIDATE_EMAIL))
     { 
       $file=__DIR__ . DIRECTORY_SEPARATOR . 'emails' . DIRECTORY_SEPARATOR . date('Y-m-d');
       file_put_contents($file, $email . PHP_EOL ,FILE_APPEND);
       $success="votre mail a ete enregistre";
       $email=null;
     }
     else
     {
        $error=" email invalide";
     }
}

require 'elements/header.php';
?>

<h1>s'inscrire a la newsletter</h1>
<p>
entrez votre email :
</p>

<?php  if($error): ?>
     <div class="alert alert-danger">
        <?php echo $error; ?>
     </div>
<?php endif; ?>

<?php  if($success): ?>
     <div class="alert alert-success">
        <?php echo $success; ?>
     </div>
<?php endif; ?>






<?php require 'elements/footer.php'; ?>