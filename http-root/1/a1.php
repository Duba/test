<?php

class User {

	/**
	 * @var int
	 */
	private $id = 0;

	/**
	 * @var string
	 */
	private $realName = '';

	/**
	 * @var string
	 */
	private $emailAddress = '';

	/**
	 * @var string
	 */
	private $screenName = '';

	/**
	 * @param int $id
	 * @param string $realName
	 * @param string $emailAddress
	 */
	public function __construct($id, $realName, $emailAddress) {
		$this->id = $id;
		$this->realName = $realName;
		$this->emailAddress = $emailAddress;
	}

	/**
	 * @param string $screenName
	 */
	public function setScreenName($screenName) {
		$this->screenName = $screenName;
	}

	/**
	 * @param string $emailAddress
	 */
	public function setEmailAddress($emailAddress) {
		$this->emailAddress = $emailAddress;
	}

	/**
	 * @return string
	 */
	public function getEmailAddress() {
		return $this->emailAddress;
	}

	/**
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @return string
	 */
	public function getRealName() {
		return $this->realName;
	}

	/**
	 * @return string
	 */
	public function getScreenName() {
		if (!$this->screenName) {
			$screenName = $this->getRealName();
		} else {
			$screenName = $this->screenName;
		}
		return $screenName;
	}
}