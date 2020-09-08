<?php 
$email=null;
$error=null;

if(!empty($_POST['email']))
{
   $email=$_POST['email'];
   if (filter_var($email, FILTER_VALIDATE_EMAIL))
     {
       
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

<form action="newsletter.php" method="POST" class="form-inline">
    <div class="form-group">
        <input type="email" name="email" class="form-control" placeholder="entrez votre email" required>
    </div>
    <button type="submit "class="btn btn-primary">sinscrire</button>
</form>




<?php require 'elements/footer.php'; ?>