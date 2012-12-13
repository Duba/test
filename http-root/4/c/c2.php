<?php

include('c1.php');

try {
	$url = new URL('http://php.net/manual/en/mix/f');
	$url2 = new URL('http://php.net/manual');

	var_dump($url->isSubpathOf($url2));
	var_dump($url->getRelativePath($url2));
} catch (InvalidArgumentException $e) {
	print $e->getMessage() . '<br />';
}

try {
	$url = new URL('http://php.net/manual');
	$url2 = new URL('http://php.net/manual/en');

	var_dump($url->isSubpathOf($url2));
} catch (InvalidArgumentException $e) {
	print $e->getMessage() . '<br />';
}

try {
	$url2 = new URL('http://php.net/manual');
	$url = new URL('http://php.net/manual');

	var_dump($url->isSubpathOf($url2));
} catch (InvalidArgumentException $e) {
	print $e->getMessage() . '<br />';
}

try {
	$url2 = new URL('http://www.google.com/manual');
	$url = new URL('http://php.net/manual');

	var_dump($url->isSubpathOf($url2));
} catch (InvalidArgumentException $e) {
	print $e->getMessage() . '<br />';
}



