<?php 
function ajouter_vue()
{   
    $fichier =  dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'compteur';
    $fichier_journalier = $fichier . '-' . date('Y-m-d');
    increment_compteur($fichier);
    increment_compteur($fichier_journalier);
    
}

function increment_compteur(string $fichier)
{ 
    $compteur = 1;
    if(file_exists($fichier))
    {  
        $compteur=(int)file_get_contents($fichier);
        $compteur++;
       
    }
      file_put_contents($fichier,$compteur); 

   
}

function nombres_devues()
{
    $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'compteur' ;
    return file_get_contents($fichier);
}

?>

