<?php
$pdo = new PDO("mysql:host=localhost;dbname=pdo", 'root', '',
[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
 PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
]);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$error=null;
try
    {
        $query=$pdo->query('SELECT* FROM posts');
        $posts=$query->fetchAll();
    }
catch(PDOException $e)
    {
        $error=$e->getMessage();
    } 


require '../elements/header.php';
?>
<div class="container">
    <p>
      <a href="index.php">revenir au listing</a>
    </p>

    <?php if($success): ?>
           <div class="alert alert-success">
                <?php echo $success; ?>
           </div>
    <?php endif; ?>
<?php if($error): ?>
    <div class="alert alert-danger">
        <?php echo $error; ?>
    </div>
<?php else: ?>
    <form action="" method="POST">
            <div class="form-group">
                 name :
                <input type="text" class="form-control" name="name" value="<?php echo $post->name; ?>" >
            </div>
            <div class="form-group">
            content:
            <textarea class="form-control" name="content" ></textarea>
            </div>
            <button class="btn btn-primary">sauvegarder</button>
        </form>
<?php endif; ?>
</div>


<?php require '../elements/footer.php'; ?>
