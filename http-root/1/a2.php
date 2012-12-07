<?php

include_once('a1.php');

$u1 = new User(1, 'Steven', 'sg@campoint.net');
$u2 = new User(2, 'Tim', 'tr@campoint.net');

$u2->setScreenName('Timmeyy');

var_dump($u1->getScreenName());
var_dump($u2->getScreenName());