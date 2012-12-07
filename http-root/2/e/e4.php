<?php

spl_autoload_register(function ($class) {
	$map = array(
		'Author' => '/e1.php',
		'Blog' => '/e2.php',
		'Post' => '/e3.php'
	);

	if (isset($map[$class])) {
		include(__DIR__ . $map[$class]);
	}
});