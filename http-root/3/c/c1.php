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
			throw new InvalidArgumentException(sprintf('%s is not a valid iban: prefix check failed', $string));
		}

		if (!$this->isGroupValid()) {
			throw new InvalidArgumentException(sprintf('%s is not a valid iban: group check failed', $string));
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
	 * @return int
	 */
	private function getGroup() {
		return isset($this->isbn[ISBN::ISBN_GROUP]) ? $this->isbn[ISBN::ISBN_GROUP] : 0;
	}

	/**
	 * @return bool
	 */
	private function isPrefixValid() {
		return in_array($this->getPrefix(), array(978, 979));
	}

	/**
	 * @return bool
	 */
	private function isGroupValid() {
		$isValid = false;
		$group = $this->getGroup();

		switch (mb_strlen($group)) {
			case 1:
				$isValid = (($group >= 0 && $group <= 5) || ($group == 7));
				break;
			case 2:
				$isValid = ($group >= 80 && $group <= 94);
				break;
			case 3:
				$isValid = (($group >= 600 && $group <= 649) || ($group >= 950 && $group <= 989));
				break;
			case 4:
				$isValid = ($group >= 9900 && $group <= 9989);
				break;
			case 5:
				$isValid = ($group >= 99900 && $group <= 99999);
				break;
		}

		return $isValid;
	}
}