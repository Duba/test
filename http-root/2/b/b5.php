<?php
include('b4.php');

$author = new Author('Steven');
$blog = new Blog($author);
$blog->setTitle('My Blog');

$blog->addPost(
	new Post($author, 'First post', 'This is my very first post.')
);
$blog->addPost(
	new Post($author, 'Second post', 'Yet another post.')
);

var_dump($blog->getTitle());

$posts = $blog->getPosts();
foreach ($posts as $post) {
	var_dump(
		$post->getHeading(),
		$post->getBody()
	);
}