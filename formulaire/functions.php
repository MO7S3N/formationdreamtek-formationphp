<?php
function checkbox(string $name, string $value, array $data)
{  $attributes='';
   $attributes .='checked'; 
?>

   <input type="checkbox" name="{name}[]" value="<?php echo $value; ?>" $attributes>
<?php
}
?>
 