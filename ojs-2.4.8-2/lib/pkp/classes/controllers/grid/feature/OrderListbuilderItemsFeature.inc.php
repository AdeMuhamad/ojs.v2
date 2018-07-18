<?php

/**
 * @file classes/controllers/grid/feature/OrderListbuilderItemsFeature.inc.php
 *
 * Copyright (c) 2013-2017 Simon Fraser University
 * Copyright (c) 2000-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class OrderListbuilderItemsFeature
 * @ingroup controllers_grid_feature
 *
 * @brief Implements listbuilder ordering functionality.
 *
 */

import('lib.pkp.classes.controllers.grid.feature.OrderItemsFeature');

class OrderListbuilderItemsFeature extends OrderItemsFeature {

	/**
	 * Constructor.
	 */
	function OrderListbuilderItemsFeature() {
		parent::OrderItemsFeature(false);
	}


	//
	// Extended methods from GridFeature.
	//
	/**
	 * @see GridFeature::getJSClass()
	 */
	function getJSClass() {
		return '$.pkp.classes.features.OrderListbuilderItemsFeature';
	}
}

?>
