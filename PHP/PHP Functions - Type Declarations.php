<?php
// PHP7

class Person {
  public $name, $age, $gender, $occupation;
  public function __construct(string $name, int $age, string $gender, string $occupation) {
    $this->name = $name;
    $this->age = $age;
    $this->gender = $gender;
    $this->occupation = $occupation;
  }
}

// Expects instance of Person class as argument
function get_profile(Person $class_instance) {
  return "Name: $class_instance->name" . '<br>' . "Age: $class_instance->age" . '<br>' .
       "Gender: $class_instance->gender" . '<br>' . "Occupation: $class_instance->occupation";
}

// Expects integers as arguments
function multiply(int $a, int $b) {
  return $a * $b;
}

$jane = new Person('Jane Doe', 24, 'Female', 'Web Developer');
echo get_profile($jane);