<?php

include('a1.php');

try {
	$url = new URL('FTP://php.net/manual/en/language.oop5.magic.php');
	print $url . '<br />';
} catch (InvalidArgumentException $e) {
	print $e->getMessage() . '<br />';
}

try {
	$url = new URL('HTTP://steven:sakfhk@php.net/manual/en/language.oop5.magic.php');
	print $url . '<br />';
} catch (InvalidArgumentException $e) {
	print $e->getMessage() . '<br />';
}

try {
	$url = new URL('http://php.net:80/manual/en/language.oop5.magic.php');
	print $url . '<br />';
} catch (InvalidArgumentException $e) {
	print $e->getMessage() . '<br />';
}

try {
	$url = new URL('http://php.net:80/manual/en/language.oop5.magic.php?p=3');
	print $url . '<br />';
} catch (InvalidArgumentException $e) {
	print $e->getMessage() . '<br />';
}

try {
	$url = new URL('http://example.com');
	print $url . '<br />';
} catch (InvalidArgumentException $e) {
	print $e->getMessage() . '<br />';
}

try {
	$url = new URL('https://example.com');
	print $url . '<br />';
} catch (InvalidArgumentException $e) {
	print $e->getMessage() . '<br />';
}