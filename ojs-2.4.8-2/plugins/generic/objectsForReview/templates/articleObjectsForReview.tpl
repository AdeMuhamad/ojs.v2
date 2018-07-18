{**
 * @file plugins/generic/objectsForReview/templates/articleObjectsForReview.tpl
 *
 * Copyright (c) 2013-2017 Simon Fraser University
 * Copyright (c) 2003-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Display objects reviewed by the article.
 *
 *}

<div class="separator"></div>
<div id="objectsForReviewListing">
	<h3>{translate key="plugins.generic.objectsForReview.public.articleObjectsForReview"}</h3>
	{foreach from=$objectsForReview item=objectForReview name=objectsForReview}
		<div class="objectForReviewListing" style="clear:left;">

			{include file="$ofrTemplatePath/objectForReviewMetadata.tpl"}

			<div{if not $smarty.foreach.objectsForReview.last} class="separator"{/if} style="clear:both;"></div>

		</div>
	{/foreach}
</div>

