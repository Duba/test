<?php

include('d1.php');

try {
	$myISBN = new ISBN('978-3-86680-192-9');
	echo $myISBN;
} catch (InvalidArgumentException $e) {
	echo $e->getMessage();
}

echo "<br />";

try {
	$myOtherISBN = new ISBN('978-3-86680-192-8');
	echo $myOtherISBN;
} catch (InvalidArgumentException $e) {
	echo $e->getMessage();
}