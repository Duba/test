<?php

class Author {

	/**
	 * @var string
	 */
	private $name = '';

	/**
	 * @param string $name
	 */
	public function __construct($name) {
		$this->name = $name;
	}
}