<?php
class MyClass {
    public function __construct() {
        echo "Constructor called<br>";
    }

    public function __destruct() {
        echo "Destructor called<br>";
    }

    public function show() {
        echo "Hello";
    }
}
$obj = new MyClass();

$obj->show();