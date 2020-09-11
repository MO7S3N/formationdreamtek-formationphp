<?php 
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'class' . DIRECTORY_SEPARATOR . 'Creneau.php';
$creneau = new Creneau(9,12);
$creneau2= new Creneau(10,16);
$creneau->intersect($creneau2);
echo $creneau->toHtml();
/******************/
require dirname( __DIR__) . DIRECTORY_SEPARATOR . 'class' . DIRECTORY_SEPARATOR . 'form.php';
echo form::checkbox('demo','Demo',[]);
echo form::$class;



?>