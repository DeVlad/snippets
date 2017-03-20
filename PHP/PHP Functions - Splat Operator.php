<?php
// PHP5.6

function sum_all(...$arguments) {
  return array_sum($arguments);
}

echo sum_all(1,2,3,4,5);