<?php
function checkbox(string $name, string $value, array $data)
{  $attributes='';
   if (isset($data[$name])&& in_array($value, $data[$name]))
   {
    $attributes .='checked'; 
   }
     
?>
   <input type="checkbox" name="{$name}[]" value="<?php echo $value; ?>" $attributes>
<?php
}
?>

<?php
 function radio(string $name, string $value, array $data)
 {$attributes='';
    if (isset($data[$name])&& ($value==$data[$name]))
    {
     $attributes .='checked'; 
    }
      
 ?>
    <input type="radio" name="<?php echo $name ?>" value="<?php echo $value; ?>" $attributes>
 <?php
 }
 ?>
 
 <?php
 function creneaux_html(array $creneaux)
  {
    $phrases = [];
   if(empty($creneaux))
    {
       return 'fermé'; 
    }
    foreach($creneaux as $creneau)
    {
        $phrases[]=" de <strong>  $creneau[0] </strong> a $creneau[1]  </strong>";
    }
    return 'Ouvert' . implode('et', $phrases);
 }
?>

<?php
function in_creneaux(int $heure, array $creneaux) : bool
{
  foreach ($creneaux as $creneau)
  {
      $debut=$creneau[0];
      $fin=$creneau[1];
      if($heure >= $debut && $heure <  $fin)
      {
         return true;
      }
  }
  return false;
}
?>