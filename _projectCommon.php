<?php

# Set the theme for your project's web pages.
# See the Committer Tools "How Do I" for list of themes
# https://dev.eclipse.org/committers/ 
$theme = "solstice";

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
$Nav->addNavSeparator("Tools",   "/tools/");
$Nav->addCustomNav( "About This Project", "/projects/project_summary.php?projectid=tools", "", 1  );
$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Charter", "/tools/eclipsetools-charter.php",   "_self", 1);

