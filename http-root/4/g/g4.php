<?php

spl_autoload_register(function ($class) {
	$map = array(
		'HTTPStatusHeader' => '/g1.php',
		'OKStatusHeader' => '/g2.php',
		'NotFoundStatusHeader' => '/g3.php'
	);

	if (isset($map[$class])) {
		include(__DIR__ . $map[$class]);
	}
});