<?php

/**
 * @defgroup plugins_generic_backup
 */
 
/**
 * @file plugins/generic/back/up/index.php
 *
 * Copyright (c) 2013-2017 Simon Fraser University
 * Copyright (c) 2000-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief Wrapper for backup plugin.
 *
 * @ingroup plugins_generic_backup
 */

require_once('BackupPlugin.inc.php');

return new BackupPlugin();

?> 
