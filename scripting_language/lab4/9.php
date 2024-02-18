<?php
class Show{
    public static $detail = "This is static variable";
    public static function display($msg){
        echo $msg;
    }
}
Show::display("This is static method");
Show::$detail;