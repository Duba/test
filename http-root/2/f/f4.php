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
}