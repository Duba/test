<?php

class Blog {

	/**
	 * @var string
	 */
	private $title = '';

	/**
	 * @var Author
	 */
	private $owner = null;

	/**
	 * @param Author $owner
	 */
	public function __construct(Author $owner) {
		$this->owner = $owner;
	}

	/**
	 * @param string $title
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * @return string
	 */
	public function getTitle() {
		return $this->title;
	}
}