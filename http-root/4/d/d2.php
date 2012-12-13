<?php

include('d1.php');

try {
	$url = new URL('http://example.com/path');
	$newURL = new URL($url->getURLStringForSubpath('sub/directory'));

	echo $newURL;

} catch (InvalidArgumentException $e) {
	print $e->getMessage() . '<br />';
}