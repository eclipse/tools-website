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
	$pageTitle 		= "Tools PMC Project Creation Process";
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
  <h3>Eclipse Tools PMC New Project Process</h3>

<table BORDER=0 CELLSPACING=5 CELLPADDING=2 WIDTH="100%" >
  <tr> 
    <td> 
      <p align="center"><b>Tools PMC Project Creation Process</b></p>
      <p align="center"><b>DRAFT</b></p>
      <p align="left"><b>Overview</b></p>
      <p>The mission of Eclipse Tools Project is to foster the creation of a wide 
        variety of tools for the Eclipse Platform. The project provides a focal 
        point for diverse tool builders to ensure the creation of best of breed 
        tools for the platform. The Tools project provides a place where a single 
        point for interaction and coordination for all tools developers can occur 
        which will minimize overlap and duplication, ensure maximum sharing and 
        creation of common components and promote seamless interoperation between 
        the diverse types of developed tools. The project will promote the Eclipse 
        vision and attempt to foster subprojects that set the &#147;gold standard&#148; 
        for tools implementers.</p>
      <p>This document describes the subproject creation process followed by the 
        Eclipse Tools PMC. The Tools PMC, is managed under the The <a href="../eclipsetools-charter.php">Eclipse 
        Tools Project Charter</a>. Part of the Tools PMC mandate is to search 
        out new projects, and bring them into eclipse as first class, eclipse 
        projects. </p>
      <p>The process for new projects follows a straight forward sequence of steps.</p>
      <ol>
        <li>New proposals to PMC</li>
        <li>Initial PMC evaluation</li>
        <li>Project Review Committee Approval</li>
        <li>Public Creation</li>
        <li>Active project development </li>
      </ol>
      <p><b>1) New Project Proposals</b> </p>
      <p>In general, project can come from many sources. These can be posted to 
        the tools-dev mailing list, the newsgroups or email to the PMC for preliminary 
        evaluation. </p>
      <ol>
        <li>proposals from the general eclipse community. </li>
        <li>proposals from member companies technology</li>
        <li>active recruitment of existing projects to eclipse.org</li>
      </ol>
      <p>Once a project proposal has been PMC will have a series of discussion 
        to review the the proposed project with the team proposing the project. 
        Typically, a written proposal is submitted which describes the work, scope 
        of the project and any information relevant to the creation of the open 
        source project. You can find some previous proposals at <a href="../proposals/">www.eclipse.org/tools/proposals</a>. 
      </p>
      <p><b>2) Initial PMC Evaluation: Criteria for acceptance of new projects</b></p>
      <p>The PMC will perform a review of new project proposal and work with the 
        proposals it receives. The Tools PMC decides if the project is in the 
        scope for the Tools PMC. Projects must be consistent with the <a href="../eclipsetools-charter.php">Tools 
        PMC project charter</a> and the Tools PMC Roadmap. </p>
      <p>Once a project looks like it will be acceptable for the tools project, 
        the first step is to inform the PRC about upcoming proposed projects. 
        This is done by posting a brief description of the proposal to the PRC 
        mailing list. This will result in some of the eclipse board membership 
        requesting information and asking to be involved. Email annoucements may 
        also be posted to various newsgroups and mailing lists which are relevant 
        to the proposal. </p>
      <p>The intent of this phase is to:</p>
      <ul>
        <li>Gauge interest and participation</li>
        <li>Locate alternative participants and possibly code bases for forming 
          the project</li>
        <li> If an alternate code base is being proposed, interested parties are 
          asked to meet and come up with a common proposal. </li>
        <li>Project leaders must understand that this may mean that they have 
          to be prepared to work with someone elses code . </li>
      </ul>
      <p>It is possible that the proposal is revised by the contributors which 
        describes the work, as a result of this collaboration phase with other 
        companies. It is better if multiple companies support a specific proposal. 
        Co-proposals often indicate well supported plan. </p>
      <p><b>3) Project Review Committee Evaluation </b></p>
      <p>The Eclipse PRC works with a project creation process which appears <b>here</b>&lt;missing 
        link to PRC page&gt;. After this phase, the PRC can decide to accept the 
        project and allow its creation or request that the PMC work with the developers 
        to improve the proposal. </p>
      <p><b>4) Public </b><b>Project Creation and Infrastructure</b><br>
      </p>
      <p>Once a subproject has been formed, the PMC will create the infrastructure 
        for your project. For a detailed description of what this entails, see 
        the PMC <a href="project-guide.php">project infrastructure guide</a> 
        on project infrastructure details.</p>
      <p><b>5) Project is Active, development starts </b></p>
      <p>Congratulations, your project is active. Development activities rules 
        are governed by the <a href="../eclipsetools-charter.php">Tools PMC Charter.</a></p>
      <p>&nbsp;</p>
      <p></p>
      <p><br>
      </p>
    </td>
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
