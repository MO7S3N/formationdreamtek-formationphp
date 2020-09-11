<?php 
$erreur=null;
$password='$2y$14$/yhh1gitoJxoWi/RMxvuve7vQJu6AzRdihn./zzOvGX/0WsD8yxRy';
if(!empty($_POST['pseudo']) && !empty($_POST['motdepasse']))
{
    if(($_POST['pseudo']=='john')&& password_verify($_POST['motdepasse'], $password))
        {
            session_start();
            $_SESSION['connecte']=1;
            header('Location:dashboard.php');
            exit();
        }
    else
    {
        $erreur="identifiants incorrects";
    }    
}

require 'functions/auth.php';
/*if(est_connecte())
{
    header('Location :dashboard.php');
    exit();
    
}*/

require 'elements/header.php'; 
?>

<?php if($erreur): ?>
    <div class="alert alert-danger">
        <?php echo $erreur; ?>
    </div>
<?php endif; ?>    

<form action="" method="POST">
  <div class="form-group">
        <input class="form-control" type="text" name="pseudo" placeholder="nom d'utilisateur">
  </div>
  <div class="form-group">
        <input class="form-control" type="password" name="motdepasse" placeholder="votre mot de passe">
  </div>
  <button class="btnb btn-primary" type="submit">se connecter</button>
</form>







<?php require 'elements/footer.php'; ?>