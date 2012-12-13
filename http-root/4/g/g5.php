<?php

include('g4.php');

try {
	$status = new OKStatusHeader();
	echo $status;
} catch (InvalidArgumentException $e) {
	echo $e->getMessage();
}

try {
	$status = new NotFoundStatusHeader();
	echo $status;
} catch (InvalidArgumentException $e) {
	echo $e->getMessage();
}