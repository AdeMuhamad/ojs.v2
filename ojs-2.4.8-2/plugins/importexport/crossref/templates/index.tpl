{**
 * @file plugins/importexport/crossref/templates/index.tpl
 *
 * Copyright (c) 2013-2017 Simon Fraser University
 * Copyright (c) 2003-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * DataCite plug-in home page.
 *}
{strip}
{assign var="pageTitle" value="plugins.importexport.crossref.displayName"}
{include file="common/header.tpl"}
{/strip}

{translate key="plugins.importexport.crossref.registrationIntro"}
{capture assign="settingsUrl"}{plugin_url path="settings"}{/capture}

<br />

<h3>{translate key="plugins.importexport.common.export"}</h3>
{if !empty($configurationErrors) || !$currentJournal->getSetting('publisherInstitution')|escape}
	<p>{translate key="plugins.importexport.common.export.unAvailable"}</p>
{else}
	<ul>
		<li><a href="{plugin_url path="articles"}">{translate key="plugins.importexport.crossref.manageDOIs"}</a></li>
	</ul>
{/if}

<h3>{translate key="plugins.importexport.common.settings"}</h3>
<br />
{translate key="plugins.importexport.crossref.settings.description" settingsUrl=$settingsUrl}
<br />

{include file="common/footer.tpl"}
