<?php

/**
 * @defgroup plugins_importexport_pubmed
 */
 
/**
 * @file plugins/importexport/pubmed/index.php
 *
 * Copyright (c) 2013-2017 Simon Fraser University
 * Copyright (c) 2003-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_importexport_pubmed
 * @brief Wrapper for PubMed export plugin.
 *
 */

require_once('PubMedExportPlugin.inc.php');

return new PubMedExportPlugin();

?>
