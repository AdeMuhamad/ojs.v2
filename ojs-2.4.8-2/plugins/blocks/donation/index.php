<?php

/**
 * @defgroup plugins_blocks_user
 */
 
/**
 * @file plugins/blocks/donation/index.php
 *
 * Copyright (c) 2013-2017 Simon Fraser University
 * Copyright (c) 2003-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_blocks_user
 * @brief Wrapper for donation block plugin.
 *
 */

require_once('DonationBlockPlugin.inc.php');

return new DonationBlockPlugin();

?> 
