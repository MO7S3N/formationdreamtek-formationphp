<?php
$pdo = new PDO("mysql:host=localhost;dbname=pdo", 'root', '',
[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
 PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
]);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$error=null;

try
    {
    if (isset($_POST['name'], $_POST['content']))
        {
            $query=$pdo->prepare('SELECT * FROM posts  WHERE id =:id');
            $query->execute([
                                    'id' => $_GET['id']
                            ]);
            $posts=$query->fetchAll();  
        }    
}      
catch(PDOException $e)
    {
        $error=$e->getMessage();
    } 


require '../elements/header.php';
?>


    
    <?php if($error): ?>
        <div class="alert alert-danger">
            <?php echo $error; ?>
        </div>
    <?php else: ?>
     <ul>
       <?php foreach($posts as $post):?>
            <li><a href="blog/edit.php?id=<?php echo $post->id; ?>"><?php htmlentities($post->name); ?></a></li>
    </ul>
       <?php endforeach; ?>
    <?php endif; ?>

<?php require '../elements/footer.php'; ?>