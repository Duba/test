<?php

spl_autoload_register(function ($class) {
	$map = array(
		'Author' => '/b1.php',
		'Blog' => '/b2.php',
		'Post' => '/b3.php'
	);

	if (isset($map[$class])) {
		include(__DIR__ . $map[$class]);
	}
});