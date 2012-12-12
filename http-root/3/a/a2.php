<?php

include('a1.php');

$myISBN = new ISBN('978-3-86680-192-9');
$myOtherISBN = new ISBN('978 3 86680 192 9');

echo $myISBN . "\n\n" . $myOtherISBN;