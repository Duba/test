<?php
include('e4.php');

$steven = new Author('Steven');
$aAuthor = new Author('Other');

$blog = new Blog($steven);
$blog->setTitle('Title');

// add an additional author
$blog->addAuthor($aAuthor);
$blog->addPost(
	new Post($steven, 'First post', 'This is my very first post.')
);
$blog->addPost(
	new Post($aAuthor, 'Second post', 'Yet another post.')
);
$blog->display();

// remove an additional author and demonstrate that he's not able to add posts anymore
$blog->removeAuthor($aAuthor);
$blog->addPost(
	new Post($aAuthor, 'Third post', 'Another post that should not be displayed.')
);
$blog->display();

// remove owner and demonstrate that he is able to add posts
$blog->removeAuthor($steven);
$blog->addPost(
	new Post($steven, '4th post', 'Another owner post')
);
$blog->display();