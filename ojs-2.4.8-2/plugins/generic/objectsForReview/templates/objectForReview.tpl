{**
 * @file plugins/generic/objectsForReview/templates/objectForReview.tpl
 *
 * Copyright (c) 2013-2017 Simon Fraser University
 * Copyright (c) 2003-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Detailed public object for review view.
 *
 *}
{assign var="pageTitle" value=plugins.generic.objectsForReview.public.objectForReview}
{include file="common/header.tpl"}

<br />

<div id="objectForReviewDetails">

{include file="$ofrTemplatePath/objectForReviewMetadata.tpl"}

<div style="clear:both;"></div>
</div>

{include file="common/footer.tpl"}
