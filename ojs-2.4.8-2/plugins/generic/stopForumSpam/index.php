<?php

/**
 * @defgroup plugins_generic_stopForumSpam
 */

/**
 * @file plugins/generic/stopForumSpam/index.php
 *
 * Copyright (c) 2013-2017 Simon Fraser University
 * Copyright (c) 2003-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_generic_stopForumSpam
 * @brief Wrapper for the Stop Forum Spam plugin.
 *
 */

require_once('StopForumSpamPlugin.inc.php');

return new StopForumSpamPlugin();

?>
