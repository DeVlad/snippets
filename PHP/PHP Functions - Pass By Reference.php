<?php

function double(&$n) {
  $n *= 2; 
}

function halve(&$n) {
  $n /= 2;
}

$n = 10;

double($n);
double($n);
halve($n); 
echo $n; //20