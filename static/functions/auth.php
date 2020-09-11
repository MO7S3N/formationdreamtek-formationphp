<?php
function est_connecte()
{
    if(session_status()==PHP_SESSION_NONE)
    {
       session_start();
    }
    return !empty(($_SESSION['connecte']));
}

function utilisateur_connecte()
{
    if(!est_connecte())
    {
            header('Location:login.php');
            exit();
    }
}

?>