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

	/**
	 * @param URL $url
	 * @return bool
	 */
	public function isSubpathOf(URL $url) {
		$result = false;
		$subpathArray = explode('/', $this->getPath());
		$pathArray = explode('/', $url->getPath());

		$match = $this->getMatchingPathParts($url);
		$diff = array_diff($subpathArray, $pathArray);

		if ($this->getHostname() === $url->getHostname() && !empty($match) && !empty($diff)) {
			$result = true;
		}

		return $result;
	}

	/**
	 * @param URL $url
	 * @return string
	 */
	public function getRelativePath(URL $url) {
		if($this->isSubpathOf($url)) {
			$diff = $this->getAdditionalPathParts($url);
		}
		return implode('/', $diff);
	}

	/**
	 * @param URL $url
	 * @return array
	 */
	private function getMatchingPathParts(URL $url) {
		$subpathArray = explode('/', $this->getPath());
		$pathArray = explode('/', $url->getPath());

		return array_slice($subpathArray, 0, count($pathArray));
	}

	/**
	 * @param URL $url
	 * @return array
	 */
	private function getAdditionalPathParts(URL $url) {
		$subpathArray = explode('/', $this->getPath());
		$pathArray = explode('/', $url->getPath());

		$diff = array_slice($subpathArray, count($pathArray));

		foreach($diff as $key => $d) {
			if($d === '') {
				unset($diff[$key]);
			}
		}
		return $diff;
	}

	/**
	 * @param string $path
	 * @return string
	 */
	public function getURLStringForSubpath($path) {
		if(mb_substr($path, 0, 1) == '/') {
			$path = mb_substr($path, 1);
		}
		return $this . '/' . $path;
	}
}