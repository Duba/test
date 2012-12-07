<?php

spl_autoload_register(function ($class) {
	$map = array(
		'Author' => '/a1.php',
		'Blog' => '/a2.php'
	);

	if (isset($map[$class])) {
		include(__DIR__ . $map[$class]);
	}
});