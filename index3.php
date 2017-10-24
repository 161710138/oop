<?php
require_once 'robot.php';

$robot1= new robot('ngak ngik nguk ngek ngok',66);

$robot1 -> set_suara ('pratpretprot');
$robot1 -> set_berat (56);
echo "suara robot adalah ".$robot1->get_suara().'<br>';
echo "berat robot adalah ".$robot1->get_berat().'<br>';

?>

