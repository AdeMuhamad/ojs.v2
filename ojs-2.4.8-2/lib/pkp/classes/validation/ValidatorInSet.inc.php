<?php

/**
 * @file classes/validation/ValidatorInSet.inc.php
 *
 * Copyright (c) 2013-2017 Simon Fraser University
 * Copyright (c) 2000-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class ValidatorInSet
 * @ingroup validation
 * @see Validator
 *
 * @brief Validation check for known sets.
 */

import('lib.pkp.classes.validation.Validator');

class ValidatorInSet extends Validator {

	/** @var array of all values accepted as valid */
	var $_acceptedValues;
	
	/**
	 * Constructor.
	 */
	function ValidatorInSet($validSet = array()) {
		parent::Validator();
		$this->_acceptedValues = $validSet;
	}


	//
	// Implement abstract methods from Validator
	//
	/**
	 * @see Validator::isValid()
	 * @param $value mixed
	 * @return boolean
	 */
	function isValid($value) {
		if (!is_array($this->_acceptedValues)) {
			return false;
		}
		return in_array($value, $this->_acceptedValues);
	}

}
?>
