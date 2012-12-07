<?php
include('f5.php');

$steven = new Author('Steven');
$aAuthor = new Author('Other');

$blog = new Blog($steven);
$blog->setTitle('Title');

$post = new Post($steven, 'First post', 'This is my very first post.');
$blog->addPost($post);
$post->addComment(new Comment($aAuthor, 'Comment 1'));
$post->addComment(new Comment($steven, 'Comment 2'));

$blog->display();