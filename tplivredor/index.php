[<?php
require_once 'class/message.php'; 
require_once 'class/GuestBook.php'; 

$errors=null;
$success=false;
if((isset($_POST['username']) && ($_POST['message'])))
{
    $message =new Message($_POST['username'],$_POST['message']);
    if($message->is_valid())
        {
            $guestbook=new GuestBook(__DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'message');
            $guestbook->addmessage($message);
            $success=true;
            $_POST = [];
        }
    else
        {
              $errors=$message->getErrors();
        }    
}

$title="Livre d'or";
require 'elements/header.php';
?>

<div class="container">
    <h1>Livre d'or </h1>
    <?php if(!empty($errors)): ?>
        <div class="alert alert-danger">
           formulaire invalide
        </div>
    <?php endif; ?>
    
    <?php if ($success): ?>
        <div class="alert alert-success">
           merci pour votre message
        </div>
    <?php endif ?>

    <form action="" method="POST">
        <div class="form-group">
            <input  type="text" name="username" placeholder="votre pseudo" class="form-control <?php isset($errors['username']) ? 'is-invalid' : '' ?>">
                <?php if(isset($errors['username'])): ?>
                    <div class="alert alert-danger">
                        <?php echo $errors['username']; ?>
                    </div>  
                <?php endif; ?>   
        </div>
        <div class="form-group">
            <textarea name="message" placeholder="votre message"  class="form-control <?php isset($errors['message']) ? 'is-invalid' : '' ?>"></textarea>
            <?php if(isset($errors['message'])): ?>
                <div class="alert alert-danger">
                    <?php echo $errors['message'];?>
                </div>  
            <?php endif; ?>   
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
</div>












<?php require 'elements/footer.php'; ?>