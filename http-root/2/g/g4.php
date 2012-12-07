<?php

class Comment {

	/**
	 * @var Author
	 */
	private $author = null;

	/**
	 * @var string
	 */
	private $text = '';

	/**
	 * @var Comment[]
	 */
	private $comments = array();

	/**
	 * @param Author $author
	 * @param $text
	 */
	public function __construct(Author $author, $text) {
		$this->author = $author;
		$this->text = $text;
	}

	/**
	 * @return string
	 */
	public function getText() {
		return $this->text;
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