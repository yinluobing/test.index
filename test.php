<?php
$a = array(1 => 'one', 2 => 'two');

foreach ($a as $key => &$val) {

} // do nothing
var_dump($a);
die;
foreach ($a as $key => $val) {

} // do nothing
