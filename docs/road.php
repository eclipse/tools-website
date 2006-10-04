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

<p><b>Roadmap</b></p>
<p> The Eclipse Tools Project (Tools) is an open software development project 
  dedicated to developing a wide range of development tools and tools-specific 
  components for the Eclipse Platform. Typically, this would include tools for 
  computer programming languages (compilers, editors), performance tools, debuggers, 
  and test tools. Tools which support the development lifecycle and help developers 
  develop more efficiently are part of this mission. The Tools PMC roadmap is 
  a statement of direction of the technology areas the Tools PMC is interested 
  in. </p>
<p>Remember folks, this is an open source project so the completion of these projects 
  requires contribution to the project. If you want to start a project contact 
  the <a href="../team-leaders.php">PMC</a>.</p>
<table width="91%" border="1">
  <tr> 
    <td><b>Technology Area</b></td>
    <td><b>Current Projects</b></td>
    <td><b>Future</b></td>
  </tr>
  <tr> 
    <td>Language IDEs</td>
    <td><a href="http://www.eclipse.org/cdt">C/C++ (CDT)</a>,
    <a href="http://www.eclipse.org/cobol">COBOL</a>,
    <a href="http://www.eclipse.org/ajdt">AJDT</a><br>
    </td>
    <td>Python, &#147;Script&#148;, *ML</td>
  </tr>
  <tr>
    <td height="35">DevTools Productivity </td>
    <td height="35">&nbsp;</td>
    <td height="35"> 
      <p>Collaboration (IM.Screen sharing), Bugzilla integration, Scriptable Eclipse 
      </p>
      </td>
  </tr>
  <tr> 
    <td>GUI Frameworks</td>
    <td><a href="http://www.eclipse.org/gef">GEF</a></td>
    <td>GUI Builder</td>
  </tr>
</table>


		<hr class="clearer" />

	</div>

</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
