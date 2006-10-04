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
	$pageTitle 		= "Eclipse Tools Planning Pages";
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

<p>This is the Tools PMC consolidated planning page. Eclipse Tools projects are 
  planned by the individual project teams themselves and detailed development 
  plans are posted on their respective project pages as described in the <a href="../eclipsetools-charter.php">Tools 
  Project Charter</a>. As part of the <a href="http://www.eclipse.org/org/documents/Eclipse%20Development%20Process%202003_11_09%20FINAL.pdf">eclipse 
  development process</a> the <a href="http://www.eclipse.org/org/council.html">Eclipse 
  Planning Council </a>is responsible for producing a coordinated platform release 
  plan for the overall Eclipse Project. </p>
<p>Each Tools Project produces a plan summary as input to the planning council. 
  Each plan summary includes two items.<br>
  1. Executive summary of current project plan, link to current project plan<br>
  2. Forward looking statement organized by relevant themes. </p>
<p> The forward looking statement should include:<br>
  - Candidate work areas<br>
  - Known unresolved work items<br>
  - Plans for keeping current with standards</p>
<p>The standard template for quarterly updates is <a href="template.html">here</a>. 
</p>

<div class="homeitem" style="width: 97%">
  <h3>Project Plans Summaries</h3>
  
<TABLE  width="102%" CELLSPACING=0 CELLPADDING=3 height="124" border="1">
  <tr> 
    <td width=32%><p><b>Project Home Page</b></p></td>
    <td width="68%"><b>Planning Documents</b></td>
  </tr>
  <tr> 
    <td width="32%"><a href="http://www.eclipse.org/cdt" target="_top">C/C++</a></td>
    <td width="68%"><strong><a href="http://dev.eclipse.org/viewcvs/indextools.cgi/%7Echeckout%7E/cdt-home/plans/cdt.htm">CDT 
      Plan Summary</a></strong></td>
  </tr>
  <tr> 
    <td width="32%"><a href="http://www.eclipse.org/gef" target="_top">GEF</a></td>
	
    <td width="68%"><strong><a href="http://www.eclipse.org/gef/overview.html">GEF 
      Plan summary </a></strong></td>

  </tr>
  <tr> 
    <td width="32%" height="21"><a href="http://www.eclipse.org/cobol" target="_top">COBOL</a></td>
    <td height="21" width="68%"><strong><a href="cobol.html">COBOL Plan Summary</a></strong></td>
  </tr>
  <tr> 
    <td width="32%" height="21"><a href="http://www.eclipse.org/vep" target="_top">Visual 
      Editor (VE)</a></td>
    <td height="21" width="68%"><strong><a href="http://dev.eclipse.org/viewcvs/indextools.cgi/%7Echeckout%7E/vep-home/plan-summary.html">VE 
      Plan Summary</a></strong></td>
  </tr>
</table>

</div>

<p>Project also provide themes into the <a href="http://www.eclipse.org/org/council.html">requirements 
  council</a> for prioritization. This results in the creation of the overall 
  <a href="http://www.eclipse.org/org/councils/20041215EclipseTPFinalDraft.pdf">themes 
  and priorities</a> that will help drive planning for projects at eclipse.org.</p>

<div class="homeitem" style="width: 97%">
  <h3>Project Themes</h3>

  <ul>
  
    <li>
    	<a href="themes.html">Themes</a><br>
    	Tools Planning Themes Input to the requirements council.<b><br>
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
