<?php
class MyClass {
    private $name;

    // Setter method
    public function setName($name) {
        $this->name = $name;
    }

    // Getter method
    public function getName() {
        return $this->name;
    }

    // Method to display name
    public function displayName() {
        echo "Name: " . $this->name . "<br>";
    }
}

// Create an instance of MyClass
$obj = new MyClass();

// Set the name using setter method
$obj->setName("John");

// Get and display the name using getter method
echo "Name retrieved using getter method: " . $obj->getName() . "<br>";

// Display the name using display method
$obj->displayName();