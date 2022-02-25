<?php 

include "employe.php";
$employe = new employe();
$employe->setfirstName("med");
echo $employe->getfirstName();


?>