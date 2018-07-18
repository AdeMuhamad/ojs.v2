<?php

/**
 * @defgroup plugins_metadata_dc11
 */

/**
 * @file plugins/metadata/dc11/Dc11MetadataPlugin.inc.php
 *
 * Copyright (c) 2013-2017 Simon Fraser University
 * Copyright (c) 2003-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class Dc11MetadataPlugin
 * @ingroup plugins_metadata_dc11
 *
 * @brief Dublic Core version 1.1 metadata plugin
 */


import('lib.pkp.plugins.metadata.dc11.PKPDc11MetadataPlugin');

class Dc11MetadataPlugin extends PKPDc11MetadataPlugin {
	/**
	 * Constructor
	 */
	function Dc11MetadataPlugin() {
		parent::PKPDc11MetadataPlugin();
	}
}

?>
