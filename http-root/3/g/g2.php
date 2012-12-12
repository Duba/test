<?php

class Analyzer {

	/**
	 * @var string[]
	 */
	private $validIsbns = array();

	/**
	 * @var string[]
	 */
	private $invalidIsbns = array();

	/**
	 * @param string $isbn
	 */
	public function addISBN($isbn) {
		try {
			$aISBN = new ISBN($isbn);
			$this->validIsbns[] = $isbn;
		} catch (InvalidArgumentException $e) {
			$this->invalidIsbns[] = $isbn;
		}
	}

	/**
	 * @return array|string[]
	 */
	public function getValidISBNs() {
		return $this->validIsbns;
	}

	/**
	 * @return array|string[]
	 */
	public function getInvalidISBNs() {
		return $this->invalidIsbns;
	}

	/**
	 * @return float
	 */
	public function getPercentageOfValidISBNs() {
		return count($this->validIsbns) / $this->getISBNCount() * 100;
	}

	/**
	 * @return float
	 */
	public function getPercentageOfInvalidISBNs() {
		return count($this->invalidIsbns) / $this->getISBNCount() * 100;
	}

	/**
	 * @return int
	 */
	private function getISBNCount() {
		return count($this->validIsbns) + count($this->invalidIsbns);
	}
}