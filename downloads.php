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

<div id="maincontent">
	<div id="midcolumn" style="width: 80%">

	<div class="homeitem" style="width: 97%">
		<h3>About the Eclipse Tools Project Downloads</h3>
      <p>The "Top Level" Tools Project itself has no "downloads", but you can see the 
      <a href="http://projects.eclipse.org/projects/tools">individual tools projects</a> 
      for what downloads they provide.</p>
            <p>If this is your first time visiting eclipse.org, you probably want to 
        download a convenient "all in one" package from <a href="http://www.eclipse.org/downloads/">Eclipse Downloads</a>.
      </p>
	</div>

		<hr class="clearer" />

	</div>

</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, NULL, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
