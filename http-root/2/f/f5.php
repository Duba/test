<?php

spl_autoload_register(function ($class) {
	$map = array(
		'Author' => '/f1.php',
		'Blog' => '/f2.php',
		'Post' => '/f3.php',
		'Comment' => '/f4.php'
	);

	if (isset($map[$class])) {
		include(__DIR__ . $map[$class]);
	}
});