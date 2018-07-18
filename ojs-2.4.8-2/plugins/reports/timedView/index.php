<?php

/**
 * @defgroup plugins_reports_timedView
 */

/**
 * @file plugins/reports/timedView/index.php
 *
 * Copyright (c) 2013-2017 Simon Fraser University
 * Copyright (c) 2003-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_generic_timedView
 * @brief Wrapper for timedView report plugin.
 *
 */

require_once(dirname(__FILE__) . '/TimedViewReportPlugin.inc.php');

return new TimedViewReportPlugin();

?>
