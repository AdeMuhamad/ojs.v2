<?php

/**
 * @file plugins/themes/classicGreen/ClassicGreenThemePlugin.inc.php
 *
 * Copyright (c) 2013-2017 Simon Fraser University
 * Copyright (c) 2003-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class ClassicGreenThemePlugin
 * @ingroup plugins_themes_classicGreen
 *
 * @brief "ClassicGreen" theme plugin
 */

import('classes.plugins.ThemePlugin');

class ClassicGreenThemePlugin extends ThemePlugin {
	/**
	 * Get the name of this plugin. The name must be unique within
	 * its category.
	 * @return String name of plugin
	 */
	function getName() {
		return 'ClassicGreenThemePlugin';
	}

	function getDisplayName() {
		return 'ClassicGreen Theme';
	}

	function getDescription() {
		return 'Classic green layout';
	}

	function getStylesheetFilename() {
		return 'classicGreen.css';
	}

	function getLocaleFilename($locale) {
		return null; // No locale data
	}
}

?>
