<?php
include('g5.php');

$steven = new Author('Steven');
$aAuthor = new Author('Other');

$blog = new Blog($steven);
$blog->setTitle('Title');

$post1 = new Post($steven, 'First post', 'This is my very first post.');
$blog->addPost($post1);

$post2 = new Post($steven, 'Second post', 'This is my second post.');
$blog->addPost($post2);

$comment1 = new Comment($aAuthor, 'Comment 1');
$post1->addComment($comment1);

$comment2 = new Comment($aAuthor, 'Comment 2');
$post2->addComment($comment2);

$comment3 = new Comment($steven, 'Comment 3');
$comment2->addComment($comment3);

$blog->display();