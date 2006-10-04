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
	$pageTitle 		= "Tools PMC Project Initial Data Form";
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
  <h3>Eclipse Tools PMC New Project Data</h3>
  <ul>
      <p>When creating a new project, you will need to submit 
        the following data</b></p>
		
      <p><b>1) Project Name </b></p>
      <p> This is the name of the project which will be used for things like the 
        newsgroups, mailing lists etc. This is typically a three or four letter 
        shortform for the project. This name ends up being the home page www.eclipse.org/XYZ 
        so pick carefully. It also cannot conflict with other subprojects at eclipse.org. 
      </p>
      <p>See - <a href="project-guide.php">http://www.eclipse.org/tools/docs/project-guide.php</a> 
        for more details. </p>
      <p>Even though it was written for tools, we use the same information and 
        process for technology projects ...</p>
      <p><b>2) Project description</b><br>
        Summary description of the project. This for the link in the technology 
        page. See http://www.eclipse.org/tools/ for other examples</p>
      <p><b>3) List of initial committers in following format:</b></p>
      <p>Full Name (first/last), Company, Telephone (Work telephone number is 
        ok) </p>
      <p><b>4) List of initial CVS components</b><br>
        Typical new projects will have project-home and a org.eclipse.project. 
        The -home is used for web and the other for code.</p>
      <p>You need to provide a list of which committer has access to which component. 
        If you decide to have a single component then all committers can access 
        it.</p>
      <p><b>5) Bugzilla modules and milestones </b><br>
        This is for bugzilla problem reports. Typically, there is one component 
        and a default milestone created however as the project progress, you may 
        add and modifiy these to match the release milestones. </p>
      <p><b>Phased Creation of Projects</b></p>
      <p>The project is created in two steps.</p>
      <p>1) CVS, user accounts, mailing-list, master home page (links to your 
        page in CVS), download space on download.eclipse.org, and bugzilla </p>
      <p>2) The newsgroups, mailing lists and and tools main page are then connected 
        to your project making it &quot;live&quot;. </p>
      <p>.This ensures all the core infrastructure is ready before the newsgroup. 
        This allows you to populate the data and set up an initial project structure.</p>
      <p>Creating the newsgroup last is something we learned in doing the first 
        couple of new subproject in the Tools PMC. Many newsreaders actively inform 
        their users of the existance of a new newsgroup so when we first created 
        all the infrastructure in a single big bang, the subproject leaders didn't 
        have enough time to populate the main web page of the project before it 
        was &quot;pre-announced&quot; by the newsreader software. We now wait 
        for the main web page to be complete before the newsgroups are created. 
        We then post an initial message, inviting people to visit the newly created 
        project page to learn more about the project. </p>
      <p></p>
      <p><br>
      </p>
  </ul>
</div>

		<hr class="clearer" />

	</div>

</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
