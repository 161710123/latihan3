<?php

require_once 'index1.php';

$robot1 = new robot ('ngik ngik ngik',33);
$robot2 = new robot ('ngok ngok ngok',10);
$robot1->set_berat(50);
$robot2->set_suara ('nguk nguk nguk');
echo "berat robot :".$robot1->get_berat() . '<br>';
echo "suara robot :".$robot2->get_suara() . '<br>';



?>