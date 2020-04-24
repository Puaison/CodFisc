<?php

require_once "AutoloadUtility.php";

$Miriana=new Codicefiscale("del signore","luca","1998","05","02","F","L'AQUILA","AQ");

$a=$Miriana->getcodice();
print ($a);

$test=new Codicecontrollo("AADWGE","","","","","");
print($test->__tostring());

