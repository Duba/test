<?php
ini_set('error_reporting', -1);
ini_set('display_errors', 'stdout');

include('a3.php');

$author = new Author('Steven');
$blog = new Blog($author);
$blog->setTitle('My Blog');

var_dump($blog->getTitle());