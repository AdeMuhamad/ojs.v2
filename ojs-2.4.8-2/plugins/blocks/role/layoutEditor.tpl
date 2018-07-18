{**
 * plugins/blocks/role/layoutEditor.tpl
 *
 * Copyright (c) 2013-2017 Simon Fraser University
 * Copyright (c) 2003-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * LayoutEditor navigation sidebar.
 *
 *}
<div class="block" id="sidebarLayoutEditor">
	<span class="blockTitle">{translate key="user.role.layoutEditor"}</span>
	<span class="blockSubtitle">{translate key="article.submissions"}</span>
	<ul>
		<li><a href="{url op="submissions" path="active"}">{translate key="common.queue.short.active"}</a>&nbsp;({if $submissionsCount[0]}{$submissionsCount[0]}{else}0{/if})</li>
		<li><a href="{url op="submissions" path="completed"}">{translate key="common.queue.short.completed"}</a>&nbsp;({if $submissionsCount[1]}{$submissionsCount[1]}{else}0{/if})</li>
	</ul>
</div>
