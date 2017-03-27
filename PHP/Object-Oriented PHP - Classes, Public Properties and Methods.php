<?php

class President {
  public $name = 'Barack Obama';
  public function greet($name) {
    $this->name = $name;
    return "Hello $this->name, my name is Barack Obama, nice to meet you!";   
  }
}

$us_president = new President();
echo $president_name = $us_president->name . '<br>'; //Barack Obama
echo $greetings_from_president = $us_president->greet('Donald') . '<br>'; //Hello Donald, my name is Barack Obama, nice to meet you!
echo $president_name = $us_president->name; //Donald