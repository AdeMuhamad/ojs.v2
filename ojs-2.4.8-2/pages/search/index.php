<?php

/**
 * @defgroup pages_search
 */

/**
 * @file pages/search/index.php
 *
 * Copyright (c) 2013-2017 Simon Fraser University
 * Copyright (c) 2003-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_search
 * @brief Handle search requests.
 *
 */

switch ($op) {
	case 'index':
	case 'search':
	case 'authors':
	case 'titles':
	case 'categories':
	case 'category':
		define('HANDLER_CLASS', 'SearchHandler');
		import('pages.search.SearchHandler');
		break;
}

?>
