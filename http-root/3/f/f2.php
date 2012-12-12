<?php

include('f1.php');

// compare different ISBNs
try {
	$myISBN = new ISBN('978-3-86680-192-9');
	$mySameISBN = new ISBN('978-3-446-41394-8');
	var_dump($myISBN->isEqual($mySameISBN));
} catch (InvalidArgumentException $e) {
	echo $e->getMessage();
}

// compare same ISBNs
try {
	$myISBN = new ISBN('978-3-86680-192-9');
	$mySameISBN = new ISBN('978-3-86680-192-9');
	var_dump($myISBN->isEqual($mySameISBN));
} catch (InvalidArgumentException $e) {
	echo $e->getMessage();
}