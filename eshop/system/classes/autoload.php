<?php 
function classLoader($class_name)
{
    require_once($_SERVER['DOCUMENT_ROOT']."/litvinovajann/eshop/system/classes/$class_name.php");
}
spl_autoload_register("classLoader");