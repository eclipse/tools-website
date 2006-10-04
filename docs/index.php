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
	$pageTitle 		= "Eclipse Tools Docs Page";
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

<div id="maincontent">
	<div id="midcolumn" style="width: 80%">

<div class="homeitem" style="width: 97%">
  <h3>Project Creation and Infrastructure</h3>
  <ul>
    <li><a href="new-project-process.php" target="_top"><b>New Projects </b></a><br>
      This document describes the subproject creation process. If you would like 
      to create a subproject in the tools project, you should read this.
    </li>
 
    <li><a href="project-guide.php"><strong>Project Infrastructure </strong></a><br>
      This document is for project leaders and developers at eclipse.org. It describes 
      the infrastructure at eclipse.org, how to interact with the PMC for day 
      to day management of the web site and other infrastructure related issues. 
    </li>

    <li><a href="road.php"><b>Tools Roadmap</b></a><br>
      The tools project is dedicated to creation of world class tools for the 
      eclipse platform. The roadmap describes the areas the tools PMC is interested 
      in seeing tools created for the eclipse platform. Note, that without public 
      open source participation, these projects will not make progress so if you'd 
      like to see some of these things come to light, propose a project.
    </li>
    
    <li><a href="new-project-data.php"><b>New Projects - Infrastructure Data </b></a><br>
      When creating a new subproject, this form describes the information required by the
      eclipse webmaster to initially set up the project.
    </li>
  </ul>
</div>

<div class="homeitem" style="width: 97%">
  <h3>Project Propsal Archive</h3>
  <ul>
    <li><a href="../proposals/"><b>Archive</b></a><br>
    Archive of the existing proposals to the tools PMC.
    </li>
  </ul>
</div>

		<hr class="clearer" />

	</div>

</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
