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

function nombres_devues_mois(int $annee , int $mois)
{
    $mois=str_pad($mois,2,'0', STR_PAD_LEFT );
    $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'compteur-' . $annee . '-' . $mois . '-' . '*' ;
    $fichiers=glob($fichier);
    $total=0;
    foreach($fichiers as $fichier)
    {
        $total += (int) file_get_contents($fichier);
    }
    return $total;
    
}

function nombres_devues_detail_mois(int $annee , int $mois)
{
    $mois=str_pad($mois,2,'0', STR_PAD_LEFT );
    $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'compteur-' . $annee . '-' . $mois . '-' . '*' ;
    $fichiers=glob($fichier);
    $visites=[];
    foreach($fichiers as $fichier)
    {
       $parties =explode('-',basename($fichier));
       $detail[]=
       [
           'annee'=>$parties[1],
           'mois'=>$parties[2],
           'jour'=>$parties[3],
           'visites'=>file_get_contents($fichier)

       ];
       
    }
    
}
?>

