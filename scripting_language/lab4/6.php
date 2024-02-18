<?php
class Show{
    private $text;
    public function __construct($text){
        $this->text = $text;
    }
    public function show(){
        echo $this->text;
    }
}

$obj = new Show('hello');
$obj->show();