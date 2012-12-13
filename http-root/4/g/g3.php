<?php

class NotFoundStatusHeader extends HTTPStatusHeader {

	public function __construct() {
		parent::__construct(404);
	}
}