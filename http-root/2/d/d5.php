<?php
include('d4.php');

$steven = new Author('Steven');
$aAuthor = new Author('Other');

$blog1 = new Blog($steven);
$blog1->addAuthor($aAuthor);

$blog1->setTitle('My Blog');

$blog1->addPost(
	new Post($steven, 'First post', 'This is my very first post.')
);
$blog1->addPost(
	new Post($aAuthor, 'Second post', 'Yet another post.')
);

var_dump($blog1->getTitle());

$posts = $blog1->getPosts();
foreach ($posts as $post) {
	var_dump(
		$post->getHeading(),
		$post->getBody()
	);
}