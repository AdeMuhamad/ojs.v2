{**
 * plugins/generic/externalFeed/block.tpl
 *
 * Copyright (c) 2013-2017 Simon Fraser University
 * Copyright (c) 2003-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * External feed plugin navigation sidebar.
 *
 *}
<div class="block" id="sidebarExternalFeed">
	{foreach from=$externalFeeds item=externalFeed}
		<span class="blockTitle">{$externalFeed.title|truncate:20:"..."}</span>
		<ul>
		{foreach from=$externalFeed.items item=feedItem}
			<li>
				<a href="{$feedItem->get_permalink()}" target="_blank">{$feedItem->get_title()|truncate:40:"..."}</a>
			</li>
		{/foreach}
		</ul>
	{/foreach}
</div>
