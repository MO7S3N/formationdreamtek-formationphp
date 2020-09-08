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
       file_put_contents($file,$email . PHP_EOL ,FILE_APPEND);
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

<form action="newsletter.php" method="POST" class="form-inline">
    <div class="form-group">
        <input type="email" name="email" class="form-control" placeholder="entrez votre email" value="<?php htmlentities($email) ?>" required>
    </div>
    <button type="submit "class="btn btn-primary">s'inscrire</button>
</form>




<?php require 'elements/footer.php'; ?>