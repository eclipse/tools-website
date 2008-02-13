<?php

	# Set the theme for your project's web pages.
	# See the Committer Tools "How Do I" for list of themes
	# https://dev.eclipse.org/committers/ 
	$theme = "Lazarus";

	require_once($_SERVER['DOCUMENT_ROOT'] . "/projects/common/project-info.class.php");

$branding = <<<EOBRANDING
<div id="branding">
<h1>Tools Project</h1>
</div>
EOBRANDING;
$Menu->setProjectBranding($branding);

	$Nav->setLinkList(array());

	# Define your project-wide Nav bars here.
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	$Nav->addNavSeparator("Tools", 	"/tools/");
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Team", "/tools/team-leaders.php", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Charter", "/tools/eclipsetools-charter.php", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Planning", "/tools/planning", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Architecture", "/tools/architecture", 	"_self", 1);

	$Nav->addNavSeparator("Docs", "/tools/docs/", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;New Projects", 	"/tools/docs/new-project-process.php", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Infrastructure", 	"/tools/docs/project-guide.php", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Roadmap", "/tools/docs/road.php", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Archive", "/tools/proposals/", "_self", 1);

	$Nav->addNavSeparator("Subprojects", "", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;AspectJ", "/aspectj/", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;AJDT", "/ajdt/", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;CDT", "/cdt/", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;COBOL", "/cobol/", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;GEF", "/gef/", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;Orbit", "/orbit/", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;PDT", "/php/", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;PTP", "/ptp/", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;VE", "/vep/", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;Buckminster", "/buckminster/", 	"_self", 1);

?>
