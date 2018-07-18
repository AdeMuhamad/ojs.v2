<?php

/**
 * @defgroup pages_issue
 */
 
/**
 * @file pages/issue/index.php
 *
 * Copyright (c) 2013-2017 Simon Fraser University
 * Copyright (c) 2003-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_issue
 * @brief Handle requests for issue functions. 
 *
 */

switch ($op) {
	case 'index':
	case 'current':
	case 'view':
	case 'archive':
	case 'viewIssue':
	case 'viewDownloadInterstitial':
	case 'viewFile':
	case 'download':
		define('HANDLER_CLASS', 'IssueHandler');
		import('pages.issue.IssueHandler');
		break;
}

?>
