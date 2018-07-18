<?php

/**
 * @defgroup plugins_implicitAuth_shibboleth
 */

/**
 * @file plugins/implicitAuth/shibboleth/index.php
 *
 * Copyright (c) 2013-2017 Simon Fraser University
 * Copyright (c) 2003-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_implicitAuth_shibboleth
 * @brief Wrapper for the shibboletz plugin.
 *
 */

require_once('ShibAuthPlugin.inc.php');

return new ShibAuthPlugin();

?>
