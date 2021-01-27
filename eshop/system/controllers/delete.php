<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/eshop/system/classes/autoload.php');

$className = $_GET['class_name'];
$id =  $_GET['id'];
$fields = [];
$values = [];
foreach ($_GET as $field=>$value) {
   if ($field != 'class_name') {
       $fields[] = $field;
       $values[] = "'".$value."'";
   }
}

$className::deleteLine($id);

header('location:'.$_SERVER['HTTP_REFERER']);