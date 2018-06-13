<?php
require 'Area.class.php';
require 'data.php';
$area = new Area($area);
var_dump($area->checkPoint(116.531748, 139.944229));
?>