<?php

spl_autoload_register(function ($class) {
	$map = array(
		'Author' => '/d1.php',
		'Blog' => '/d2.php',
		'Post' => '/d3.php'
	);

	if (isset($map[$class])) {
		include(__DIR__ . $map[$class]);
	}
});