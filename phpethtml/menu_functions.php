<?php
function nav_item(string $lien, string $titre)
{
     $classe='nav-item';
     if($_SERVER['SCRIPT_NAME']== $lien)
     {
         $classe .= 'active';
     }

?>

<li class="<?php $classe; ?>">
<a class="nav-item" href="<?php $lien; ?>"><?php echo $titre; ?></a>
</li>
<?php
}
?>