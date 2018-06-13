<?php
namespace namespacename;
class classname {
    function __construct() {
        echo __METHOD__, "\n";
    }
}
function funcname() {
    echo __FUNCTION__, "\n";
}
const constname = "global";

$a = '\namespacename\classname';
$obj = new $a; // prints classname::__construct
$b = '\namespacename\funcname';
$b(); // prints funcname
echo constant('\namespacename\constname'), "\n"; // prints global

?>