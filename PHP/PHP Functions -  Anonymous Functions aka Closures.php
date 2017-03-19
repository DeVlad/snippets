<?php

$hello_world = function () {
	return 'Hello World !';
};

$person_description = function ($name, $age, $occupation) {
	return "$name is $age years old and currently works as a(n) $occupation.";
};

echo $hello_world() . '<br>';
echo $person_description('Jane Doe', '26', 'Web Developer');