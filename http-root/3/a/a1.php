<?php

class ISBN {

	const OUTPUT_DELIMITER = '-';

	/**
	 * @var int[]
	 */
	private $isbn = array();

	/**
	 * @param $string
	 */
	public function __construct($string) {
		$this->isbn = preg_split('/[\s-]+/', $string);
	}

	/**
	 * @return string
	 */
	public function __toString() {
		return implode(ISBN::OUTPUT_DELIMITER, $this->isbn);
	}
}