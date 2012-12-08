<?php 
require 'Sum.php';

$a = 1;
$b = 2;
$s = new Sum( $a, $b );

echo  $a . ' + ' . $b . ' = ' . $s->result();

?>