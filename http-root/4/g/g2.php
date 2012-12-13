<?php

class OKStatusHeader extends HTTPStatusHeader {

	public function __construct() {
		parent::__construct(200);
	}
}