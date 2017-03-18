<?php
// PHP7

function say_hello(): string {
  // This function receives no arguments and returns a string
  return "Hello World";
}

function get_one_two_three(): array {
  // This function receives no arguments and returns an array
  return array(1, 2, 3);
}

function multiply($a, $b): float {
  // This function receives two numbers and returns a float (even if both inputs are integers)
  return $a * $b;
}

echo gettype(say_hello()) . '<br>';  // string
echo gettype(get_one_two_three()) . '<br>';  // array
echo gettype(multiply(2, 2)); // double