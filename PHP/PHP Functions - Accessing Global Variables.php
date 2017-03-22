<?php

$x = 0;

function increment_x() {
	global $x;
	$x++;
}

// Another way to access global variables within a function is by using	the superglobal $GLOBALS.
function reset_x() {
	$GLOBALS['x'] = 0;
}
	
increment_x();
increment_x();
echo $x . '<br>'; //2

reset_x();
echo $x; //0