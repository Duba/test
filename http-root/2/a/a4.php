<?php
include('a3.php');

$author = new Author('Steven');
$blog = new Blog($author);
$blog->setTitle('My Blog');

var_dump($blog->getTitle());