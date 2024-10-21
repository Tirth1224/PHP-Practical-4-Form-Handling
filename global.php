<?php
$x = "Hermil";
$y = "Permil";
function addition() {
 $GLOBALS['z'] = $GLOBALS['x'] . $GLOBALS['y'];
}
addition();
echo $z;
?>
