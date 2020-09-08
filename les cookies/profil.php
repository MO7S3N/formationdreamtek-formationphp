<?php 
if(!empty($_COOKIE['utilisateur']))
{
    $nom=$_COOKIE['utilisateur'];
}

if(!empty($_COOKIE['nom']))
{
    setcookie('utilisateur', $_POST['nom']);
    $nom=$_POST['nom'];
}

require 'elements/header.php';
?>

<?php if($nom): ?>
 
<form action="" method="post">

    <div class="form-group">
    <input type="text" class="form-control" name="nom" placeholder="entrer votre nom">
    </div>
    <button class="btn btn-primary">
    Se Connecter
    </button>
</form>



<?php require 'elements/footer.php'; ?>