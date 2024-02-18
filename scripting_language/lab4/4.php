<?php
class ParentClass {
    public function show() {
        echo "ParentClass show() method<br>";
    }
}

class ChildClass extends ParentClass {
    public function show() {
        echo "ChildClass show() method<br>";
    }
}

$parent = new ParentClass();
$child = new ChildClass();

// Call the show() method for both instances
$parent->show(); // Output: ParentClass show() method
$child->show();  // Output: ChildClass show() method
