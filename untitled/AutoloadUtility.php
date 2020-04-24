<?php


function myautoload($class_name)  {
    $class1= __DIR__ . "/" . $class_name . ".php";
    if (file_exists($class1)){
        include $class1;
    }
    else{
        return false;
    }
    return true;

}
spl_autoload_register("myautoload");