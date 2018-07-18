<?php

/**
 * @defgroup plugins_pubIds_doi
 */

/**
 * @file plugins/pubIds/doi/index.php
 *
 * Copyright (c) 2013-2017 Simon Fraser University
 * Copyright (c) 2003-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_pubIds_doi
 * @brief Wrapper for DOI plugin.
 *
 */
require_once('DOIPubIdPlugin.inc.php');

return new DOIPubIdPlugin();

?>
