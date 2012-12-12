<?php

class URL {

	/**
	 * @var string
	 */
	private $scheme = '';

	/**
	 * @var string
	 */
	private $hostname = '';

	/**
	 * @var string
	 */
	private $path = '';

	/**
	 * @param $url
	 * @throws InvalidArgumentException
	 */
	public function __construct($url) {
		$arrayURL = parse_url($url);

		if(isset($arrayURL['scheme']) && in_array(strtolower($arrayURL['scheme']), array('http', 'https'))) {
			$this->scheme = $arrayURL['scheme'];
			unset($arrayURL['scheme']);
		} else {
			throw new InvalidArgumentException('No valid scheme given');
		}

		if(isset($arrayURL['host'])) {
			$this->hostname = $arrayURL['host'];
			unset($arrayURL['host']);
		} else {
			throw new InvalidArgumentException('No host given');
		}

		if(isset($arrayURL['path'])) {
			$this->path = $arrayURL['path'];
			unset($arrayURL['path']);
		}

		if(!empty($arrayURL)) {
			throw new InvalidArgumentException('No valid url');
		}
	}

	/**
	 * @return string
	 */
	public function __toString() {
		return $this->scheme . '://' . $this->hostname . $this->path;
	}

	/**
	 * @param URL $url
	 * @return bool
	 */
	public function equalsTo(URL $url) {
		return ($this->getHostname() === $url->getHostname() && $this->getPath() === $url->getPath()
			&& $this->scheme === $url->getScheme());
	}

	/**
	 * @return string
	 */
	public function getHostname() {
		return $this->hostname;
	}

	/**
	 * @return string
	 */
	public function getPath() {
		return $this->path;
	}

	/**
	 * @return string
	 */
	public function getScheme() {
		return $this->scheme;
	}
}