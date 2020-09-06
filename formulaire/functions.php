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
 