<?php

include('c1.php');

try {
	$url = new URL('http://php.net/manual/en/language.oop5.magic.php');
	$url2 = new URL('http://php.net/manual/en/language.oop5.magic.php');

	var_dump($url->equalsTo($url2));
} catch (InvalidArgumentException $e) {
	print $e->getMessage() . '<br />';
}

try {
	$url = new URL('http://php.net/manual/en/language.oop5.magic.php');
	$url2 = new URL('https://example.com');

	var_dump($url->equalsTo($url2));
} catch (InvalidArgumentException $e) {
	print $e->getMessage() . '<br />';
}


