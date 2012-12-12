<?php

class ISBN {

	const OUTPUT_DELIMITER = '-';

	const ISBN_PREFIX = 0;
	const ISBN_GROUP = 1;
	const ISBN_PUBLISHER = 2;
	const ISBN_TITLE = 3;
	const ISBN_CHECKDIGIT = 4;

	/**
	 * @var int[]
	 */
	private $isbn = array();

	/**
	 * @param $string
	 * @throws InvalidArgumentException
	 */
	public function __construct($string) {
		$this->isbn = preg_split('/[\s-]+/', $string);
		if (!$this->isPrefixValid()) {
			throw new InvalidArgumentException(sprintf('%s is not a valid iban.', $string));
		}
	}

	/**
	 * @return string
	 */
	public function __toString() {
		return implode(ISBN::OUTPUT_DELIMITER, $this->isbn);
	}

	/**
	 * @return int
	 */
	private function getPrefix() {
		return isset($this->isbn[ISBN::ISBN_PREFIX]) ? $this->isbn[ISBN::ISBN_PREFIX] : 0;
	}

	/**
	 * @return bool
	 */
	private function isPrefixValid() {
		return in_array($this->getPrefix(), array(978, 979));
	}
}