<?php

class Post {

	/**
	 * @var Author
	 */
	private $author = null;

	/**
	 * @var string
	 */
	private $heading = '';

	/**
	 * @var string
	 */
	private $body = '';

	/**
	 * @var Comment[]
	 */
	private $comments = array();

	/**
	 * @param Author $author
	 * @param string $heading
	 * @param string $body
	 */
	public function __construct(Author $author, $heading, $body) {
		$this->author = $author;
		$this->heading = $heading;
		$this->body = $body;
	}

	/**
	 * @return Author
	 */
	public function getAuthor() {
		return $this->author;
	}

	/**
	 * @return string
	 */
	public function getBody() {
		return $this->body;
	}

	/**
	 * @return string
	 */
	public function getHeading() {
		return $this->heading;
	}

	/**
	 * @param Comment $comment
	 */
	public function addComment(Comment $comment) {
		$this->comments[] = $comment;
	}

	/**
	 * @return Comment[]
	 */
	public function getComments() {
		return $this->comments;
	}
}