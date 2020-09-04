<?php
function nav_item(string $lien, string $titre, string $linkClass='')
{
     $classe= 'nav-item';
     if($_SERVER['SCRIPT_NAME']== $lien)
     {
         $classe .= 'active';
     }

?>

<li class="<?php $classe; ?>">
<a class="nav-link" href="<?php $lien; ?>"><?php echo $titre; ?></a>
</li>
<?php
}
?>

<?php
function nav_menu(string $linkClass='')
{
return nav_item('/index.php', 'Acceuil', $linkClass) . nav_item('/contact.php', 'Contact', $linkClass);
}
?>