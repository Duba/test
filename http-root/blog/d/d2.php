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
	 * @var Author[]
	 */
	private $authors = array();

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
		if($this->isAllowedToPost($post->getAuthor())) {
			$this->posts[] = $post;
		}
	}

	/**
	 * @return Post[]
	 */
	public function getPosts() {
		return $this->posts;
	}

	/**
	 * @param Author $author
	 */
	public function addAuthor(Author $author) {
		$this->authors[] = $author;
	}

	/**
	 * @param Author $author
	 * @return bool
	 */
	private function isAllowedToPost(Author $author) {
		$result = false;
		if($author === $this->getOwner() || in_array($author, $this->authors)) {
			$result = true;
		}
		return $result;
	}
}