<?php
// 1 --  $mavar, $var5, $_ mavar, $_5var, $__élément1
// 2 --
$x="PostgreSQL";
$y="MySQL";
$z=&$x;
$x="PHP 5";
$y=&$x;
                            // $x=PHP  5 $y=PHP 5 $z=PHP 5
// 3--


$x="7 personnes";
$y=(integer) $x;
$x="9E3";
$z=(double) $x;
echo $GLOBALS['x'], $GLOBALS['y'], $GLOBALS['z']

?>