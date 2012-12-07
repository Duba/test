<?php

spl_autoload_register(function ($class) {
	$map = array(
		'Author' => '/g1.php',
		'Blog' => '/g2.php',
		'Post' => '/g3.php',
		'Comment' => '/g4.php'
	);

	if (isset($map[$class])) {
		include(__DIR__ . $map[$class]);
	}
});