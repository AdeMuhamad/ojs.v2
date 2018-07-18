<?php

/**
 * @defgroup plugins_citationOutput_vancouver_filter
 */

/**
 * @file plugins/citationOutput/vancouver/filter/Nlm30CitationSchemaVancouverFilter.inc.php
 *
 * Copyright (c) 2013-2017 Simon Fraser University
 * Copyright (c) 2000-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class Nlm30CitationSchemaVancouverFilter
 * @ingroup plugins_citationOutput_vancouver_filter
 *
 * @brief Filter that transforms NLM citation metadata descriptions into
 *  Vancouver citation output.
 */


import('lib.pkp.plugins.metadata.nlm30.filter.Nlm30CitationSchemaCitationOutputFormatFilter');

class Nlm30CitationSchemaVancouverFilter extends Nlm30CitationSchemaCitationOutputFormatFilter {
	/**
	 * Constructor
	 * @param $filterGroup FilterGroup
	 */
	function Nlm30CitationSchemaVancouverFilter(&$filterGroup) {
		$this->setDisplayName('Vancouver Citation Output');

		parent::Nlm30CitationSchemaCitationOutputFormatFilter($filterGroup);
	}


	//
	// Implement template methods from PersistableFilter
	//
	/**
	 * @see PersistableFilter::getClassName()
	 */
	function getClassName() {
		return 'lib.pkp.plugins.citationOutput.vancouver.filter.Nlm30CitationSchemaVancouverFilter';
	}


	//
	// Implement abstract template methods from TemplateBasedFilter
	//
	/**
	 * @see TemplateBasedFilter::getBasePath()
	 */
	function getBasePath() {
		return dirname(__FILE__);
	}
}
?>
