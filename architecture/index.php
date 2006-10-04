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
	$pageTitle 		= "Eclipse Tools Project Architecture";
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


<p>This is the Tools PMC project architecture page. The technical direction and 
  architecture for Eclipse Tools projects are the responsibilty of the the individual 
  project teams themselves these projects each maintain detailed design, architecture 
  and technical proposal which can be found on their respective project pages. 
  As part of the <a href="http://www.eclipse.org/org/documents/Eclipse%20Development%20Process%202003_11_09%20FINAL.pdf">eclipse 
  development process</a> the <a href="http://www.eclipse.org/org/council.html">Eclipse 
  Architecture Council </a>is responsible for producing a plaform roadmap which 
  describes the overal architecture of the Eclipse Project. The Tools Projects 
  participate in the creation of these architecture roadmap by providing architectural 
  overviews of there projects which provide a good starting point if you are trying 
  to learn about the eclipse project and its various components. </p>
<p>A sample template for the project architecture summaries can be found <a href="templates/project_main.html">here</a>.</p>

<div class="homeitem" style="width: 97%">
  <h3>Architecture Overviews</h3>

<TABLE  width="102%" CELLSPACING=0 CELLPADDING=3 height="198" border="1">
  <tr> 
    <td width=32%><p><b>Project Home Page</b></p></td>
    <td width="68%"><b>Architecture Overview</b></td>
  </tr>
  <tr> 
    <td width="32%"><a href="http://www.eclipse.org/cdt" target="_top">C/C++</a></td>
    <td width="68%"><strong><a href="cdt.html">CDT Architecture Overview</a></strong></td>
  </tr>
  <tr> 
    <td width="32%" height="26"><a href="http://www.eclipse.org/emf" target="_top">EMF</a></td>
    <td width="68%"><strong><a href="http://dev.eclipse.org/viewcvs/indextools.cgi/%7Echeckout%7E/emf-home/docs/architecture/architecture-summary.html?rev=HEAD&content-type=text/html">EMF 
      Architecture Overview</a></strong></td>
  </tr>
  <tr> 
    <td width="32%"><a href="http://www.eclipse.org/gef" target="_top">GEF</a></td>
    <td width="68%"><strong><a href="http://www.eclipse.org/gef/architecture.html">GEF 
      Architecture Overview</a></strong></td>
  </tr>
  <tr> 
    <td width="32%" height="21"><a href="http://www.eclipse.org/cobol" target="_top">COBOL</a></td>
    <td height="21" width="68%"><strong><a href="cobol.html">COBOL Architecture 
      Overview</a></strong></td>
  </tr>
  <tr> 
    <td width="32%" height="21"><a href="http://www.eclipse.org/vep" target="_top">Visual 
      Editor (VE)</a></td>
    <td height="21" width="68%"><strong><a href="ve.html">VE Architecture Overview</a></strong></td>
  </tr>
  <tr> 
    <td width="32%" height="21"><a href="http://www.eclipse.org/uml2" target="_top">UML2</a></td>
    <td height="21" width="68%"><strong><a href="uml2.html">UML2 Architecture 
      Overview</a></strong></td>
  </tr>
</table>

</div>

		<hr class="clearer" />

	</div>

</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
