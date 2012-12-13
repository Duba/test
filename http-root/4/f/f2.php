<?php

include('f1.php');

try {
	$status = new HTTPStatusHeader(404);
	header((string) $status);
} catch (InvalidArgumentException $e) {
	echo $e->getMessage();
}

try {
	$status = new HTTPStatusHeader(201);
} catch (InvalidArgumentException $e) {
	echo $e->getMessage();
}

var_dump(http_response_code());

