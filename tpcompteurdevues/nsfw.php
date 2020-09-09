<?php 
$age=null;



if(!empty($_POST['birthday']))
{
    $birthday=$_POST['birthday'];
    setcookie('birthday',$_POST['birthday']);
}

if(!empty($_POST['birthday']))
{
   $birthday=(int)$_COOKIE['birthday'];
   $age=date('Y')- $birthday;

}

require 'elements/header.php';
?>

<?php if($age && $age >= 18) : ?>
    <h1>Du contenu reseve aux adultes</h1>

 <?php else : ?>
     
<form action="nsfw.php" method="POST">
    <div class="form-group">
        <label for="birthday">section resereve pour les adultes,entrez votre annee de naissance</label>
       <select name="birthday" class="form-control">
         <?php for($i=2010;$i> 1919;$i--): ?>
            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
         <?php endfor; ?>   
       </select>
    </div>
     <button type="submit" class="btn btn-primary">envoyer</button>
</form>
<?php endif; ?>


<?php require 'elements/footer.php'; ?>