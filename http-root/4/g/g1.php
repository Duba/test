<?php

abstract class HTTPStatusHeader {

	/**
	 * @var int
	 */
	private $statusCode = 200;

	/**
	 * @param int $statusCode
	 * @throws InvalidArgumentException
	 */
	public function __construct($statusCode) {
		$statusCode = (int) $statusCode;
		if(!in_array($statusCode, array(200, 404))) {
			throw new InvalidArgumentException(sprintf("'%u' is not a valid status code", $statusCode));
		}
		$this->statusCode = $statusCode;
	}

	/**
	 * @return string
	 */
	public function __toString() {
		return $this->getStatusHeader();
	}

	/**
	 * @return string
	 */
	private function getStatusHeader() {
		$return = '200 OK';
		switch ($this->statusCode) {
			case 200:
				$return = '200 OK';
				break;
			case 404:
				$return = '404 Not found';
				break;
		}
		return 'HTTP/1.0 ' . $return;
	}
}