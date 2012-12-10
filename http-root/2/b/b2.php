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
	 * @var Post[]
	 */
	private $posts = array();

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

	/**
	 * @return Author
	 */
	private function getOwner() {
		return $this->owner;
	}

	/**
	 * @param Post $post
	 */
	public function addPost(Post $post) {
		if ($post->getAuthor() === $this->getOwner()) {
			$this->posts[] = $post;
		}
	}

	/**
	 * @return Post[]
	 */
	public function getPosts() {
		return $this->posts;
	}
}