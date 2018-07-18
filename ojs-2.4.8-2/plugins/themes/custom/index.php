<?php

/**
 * @defgroup plugins_themes_custom
 */

/**
 * @file plugins/themes/custom/index.php
 *
 * Copyright (c) 2013-2017 Simon Fraser University
 * Copyright (c) 2003-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_themes_custom
 * @brief Wrapper for "custom" theme plugin.
 *
 */

require_once('CustomThemePlugin.inc.php');

return new CustomThemePlugin();

?>
