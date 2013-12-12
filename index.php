<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

#*****************************************************************************
#
# template.php
#
# Author: 		Denis Roy
# Date:			2005-06-16
#
# Description: Type your page comments here - these are not sent to the browser
#
#
#****************************************************************************

#
# Begin: page-specific settings.  Change these. 
$pageTitle 		= "Eclipse Tools Project";
$pageKeywords	= "Eclipse Tools Project";
$pageAuthor		= "Tools PMC";

# Add page-specific Nav bars here
# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

# End: page-specific settings

# Paste your HTML content between the EOHTML markers!	
$html = <<<EOHTML

<div class='leftnav'>
&nbsp;
</div>

<div class='rightcolumn'>
<div class='sideitem'>
  <img src="EclipseToolsLogos/PNG/elipse-tools-logo128.png" alt="Eclipse Tools" height="128" width="128"> 
</div>
</div>

<div id="midcolumn" style="width: 80%">
<div class='homeitem' style="width: 75%">
   <h3>About the Eclipse Tools Project</h3>
      <p>The Eclipse Tools Project is an open source project of the Eclipse Foundation. 
        It is overseen 
        by a <a href="http://projects.eclipse.org/projects/tools/developers">Project Management Committee</a> (PMC) 
        but each project is ran relatively independently and overseen by the project's leaders. 
        The <a href="eclipsetools-charter.php">Eclipse Tools Project Charter</a> 
        describes the organization of the project, roles and responsibilities 
        of the participants, and top level development process for the project.
      </p>

      <p>Please see the <a href="http://projects.eclipse.org/projects/tools">project master list</a>
        for a list of all the exciting projects under the Tools PMC. Many of the best
        and most useful projects at Eclipse are here.</p>

</div>
</div>




EOHTML;


# Generate the web page
$App->generatePage($theme, $Menu, NULL, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
