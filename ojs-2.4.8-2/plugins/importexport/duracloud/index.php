<?php

/**
 * @defgroup plugins_importexport_duracloud
 */
 
/**
 * @file plugins/importexport/duracloud/index.php
 *
 * Copyright (c) 2013-2017 Simon Fraser University
 * Copyright (c) 2003-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_importexport_duracloud
 * @brief Wrapper for DuraCloud import/export plugin.
 *
 */

require_once('DuraCloudImportExportPlugin.inc.php');

return new DuraCloudImportExportPlugin();

?>
