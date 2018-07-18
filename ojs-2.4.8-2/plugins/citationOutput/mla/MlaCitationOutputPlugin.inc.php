<?php

/**
 * @defgroup plugins_citationOutput_mla
 */

/**
 * @file plugins/citationOutput/mla/MlaCitationOutputPlugin.inc.php
 *
 * Copyright (c) 2013-2017 Simon Fraser University
 * Copyright (c) 2003-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class MlaCitationOutputPlugin
 * @ingroup plugins_citationOutput_mla
 *
 * @brief MLA citation style plug-in.
 */


import('lib.pkp.plugins.citationOutput.mla.PKPMlaCitationOutputPlugin');

class MlaCitationOutputPlugin extends PKPMlaCitationOutputPlugin {
	/**
	 * Constructor
	 */
	function MlaCitationOutputPlugin() {
		parent::PKPMlaCitationOutputPlugin();
	}
}

?>
