<?php
class A {
    public static function getPwd() {
        echo __DIR__;
        # code...
    }
}
(new A())->getPwd();
?>