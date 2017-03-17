<?php

function multiply_with_defaults($a = 1, $b = 1) {
  return $a * $b;
}

function circle_area($radius = 1) {
  return pi() * $radius * $radius;
}

function prank_replace($string, $match = 'hello', $replacement = 'goodbye') {
  return str_replace($match, $replacement, $string);
}

echo multiply_with_defaults() . '<br>'; // 1
echo multiply_with_defaults(2) . '<br>'; // 2
echo multiply_with_defaults(1,3) . '<br>'; // 3

echo prank_replace("hello world !"); // goodbye world !