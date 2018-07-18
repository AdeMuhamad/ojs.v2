<?php

/**
 * @defgroup pages_payment
 */
 
/**
 * @file pages/payment/index.php
 *
 * Copyright (c) 2013-2017 Simon Fraser University
 * Copyright (c) 2003-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_payment
 * @brief Handle requests for interactions between the payment system and external
 * sites/systems.
 */

switch ($op) {
	case 'plugin':
		define('HANDLER_CLASS', 'PaymentHandler');
		import('pages.payment.PaymentHandler');
		break;
}

?>
