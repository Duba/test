<?php

spl_autoload_register(function ($class) {
	$map = array(
		'Author' => '/c1.php',
		'Blog' => '/c2.php',
		'Post' => '/c3.php'
	);

	if(isset($map[$class])) {
		include(__DIR__ . $map[$class]);
	}
});