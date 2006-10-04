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
	$pageTitle 		= "Tools PMC Guide for Project Leads";
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
  <h3>Eclipse Tools PMC Guide for Subproject Leads</h3>
  
<table BORDER=0 CELLSPACING=5 CELLPADDING=2 WIDTH="100%" >
  <tr> 
    <td> 
      <p><b>Overview</b></p>
      <p>Congratulations, you are a project lead for a tools subproject on eclipse.org. 
        Now what ? This document describes the guidelines for the processes, roles 
        and responsibilities for the team leads in running a tools subproject. 
        Since projects are run as a meritocracy, you have control over the day 
        to day running of your project within the framework of the <a href="../eclipsetools-charter.php">tools 
        pmc charter</a>. This document describes the infrastructure at eclipse.org, 
        how to interact with the PMCs for day to day management of the web site 
        and other infrastructure related issues. </p>
      <p>The is a living document, and will be updated to reflect the needs of 
        the tools projects at eclipse.org. If you have a question that this document 
        does not answer, please <a href="../team-leaders.php">email the PMC.</a> 
        Please remind the PMC to update this document with the answer so we can 
        keep the information generally available to all subproject leads.</p>
      <p><br>
        <b>Project Conventions</b></p>
      <p>Is is recommended that your project follow the conventions found <a href="http://dev.eclipse.org" target="_top">here</a>. 
        This will help keep the project consistent with the rest of the projects 
        in eclipse.org which will simplify resuse and help movement of technology 
        into the base eclipse.</p>
      <p><br>
        I<b>nfrastructure details. </b></p>
      <p>The infrastructure provided at eclipse.org for a project consists of 
        the following services. </p>
      <ul>
        <li>Newsgroup</li>
        <li>Mailing List</li>
        <li>CVS</li>
        <li>Bugzilla</li>
        <li>Download space</li>
        <li>Web site.</li>
      </ul>
      <p>When initially starting a project, you will need to provide some information 
        for our infrastructure people. The form can be found <a href="new-project-data.php">here</a>. 
      </p>
      <p><b>Newsgroup</b></p>
      <p>Newsgroups are hosted on news.eclipse.org. These newsgroups are intended 
        as a place where users of the subprojects can ask questions, get support 
        from either the developers or the community in general and interact with 
        the development team. If you are a user of a project, then this is the 
        most likely place you will want to ask your questions. If you are a developer 
        working on the project, you will do most of your interactions with other 
        developers on the mailing lists. To get the proper use of newgroups vs 
        mailing lists, you will probably need to remind errant users to post on 
        the newsgroups instead of mailing lists. </p>
      <p>Most subprojects will only have a single newsgroup. A simple naming scheme 
        is used, so for project <b>xyz</b>, the newgroup will be news:news.eclipse.org/eclipse.tools.<b>xyz.</b></p>
      <p><b>Mailing Lists</b></p>
      <p>Each tools subproject on eclipse.org may have one or more mailing lists 
        dedicated for various aspects of the subproject. Typically, project <b>xyz</b>, 
        will have a main mailing list called <b>xyz-dev@eclipse.org.</b></p>
      <p>Additionally, many projects have multiple components which are often 
        developed independently. Each of these will typically have a mailing list 
        of the form <b>xyz-component-dev@eclipse.org. </b></p>
      <p>Archives for each mailing list is maintained at http://dev.eclipse.org/mhonarc/lists/<b>xyz-dev</b>/maillist.html</p>
      <p>The mailing lists are reserved for the developers of the code and its 
        components. These are intended as hard-core developer lists which are 
        to be used by the developers for their day to day work on the project. 
        Activities like design reviews, code change proprosals, and voting is 
        all performed on these lists. </p>
      <p><b>CVS</b></p>
      <p>The project lead is responsible for dividing their project into components. 
        Commit access is controlled by component so for larger projects a project 
        lead can have finder grained control access based on developer skill. 
      </p>
      <p>All tools projects are created in the tools repository. </p>
      <p>For example, given a project structure below, you can have separate committers 
        for core, ui and debug. </p>
      <p> org.eclipse.xyz.core<br>
        org.eclipse.xyz.debug<br>
        org.eclipse.xyz.ui <br>
        org.eclipse.xyz.debug.ui</p>
      <p><br>
        Committers receive accounts on dev.eclipse.org which is how they access 
        the CVS repository. Their commit access scope is controlled per component. 
      </p>
      <p><b>Bugzilla</b></p>
      <p>Each subproject will have a bugzilla product created for them. Each product 
        will have a category for each component in the system. Each project will 
        create bugzilla &quot;target milestones&quot; for their components. Typically 
        these milestones include releases as well as milestones which come from 
        the subproject plan which is posted on the subproject main page. <br>
      </p>
      <p><b>Download Space</b><br>
        The project lead will receive an account and password on download.eclipse.org 
        which is a high bandwith download server. For tools projects, the directory 
        will be /var/eclipse/tools/xyz. The download URL, is http://download.eclipse.org/tools/<b>xyz</b>/fileName. 
      </p>
      <p>Due to security concerns, we require the IP range for people who will 
        be updating these directories. </p>
      <p>Uploads to this space are via FTP or RSYNC.<br>
        <br>
        To use rsync, you can update your download directory using the following 
        command. </p>
      <p>rsync --rsh=ssh local-dir user@download.eclipse.org:/var/eclipse/tools/xyz/server-dir/</p>
      <p><b>Web</b></p>
      <p>Each subproject has a web presense on www.eclipse.org. Each subproject 
        will get a link of the form <b>www.eclipse.org/xyz</b> which can be used 
        as the default home page for the project. The content for a subprojects 
        web pages is served directly from the tools CVS repository. The convention 
        is that a project has a <b>xyz-home</b> component in the tools CVS repository 
        and that the web pages are served from their. The committers for the &quot;xyz-home&quot; 
        essentially have control of the whole web for a particular subproject. 
      </p>
      <p>There are some images which you may use in your web pages. These can 
        be viewed at <a href="../../images/index.html">www.eclipse.org/images</a>. 
      </p>
      <p>&nbsp;</p>
      <p>There are some conventions we use for each subproject to simplify maintainance 
        of the tools main pages using an auto generated system.</p>
      <table width="75%" border="1">
        <tr> 
          <td> 
            <div align="center"><b>Filename</b></div>
          </td>
          <td> 
            <div align="center"><b>Purpose</b></div>
          </td>
        </tr>
        <tr> 
          <td> 
            <div align="center">xyz-home/main.html</div>
          </td>
          <td> 
            <div align="center">the main project page </div>
          </td>
        </tr>
        <tr> 
          <td> 
            <div align="center">xyz-home/faq.html</div>
          </td>
          <td> 
            <div align="center">the project faq page</div>
          </td>
        </tr>
        <tr> 
          <td> 
            <div align="center">xyz-home/download.html</div>
          </td>
          <td> 
            <div align="center">the project downloads page</div>
          </td>
        </tr>
        <tr> 
          <td> 
            <div align="center">xyz-home/plan.html</div>
          </td>
          <td> 
            <div align="center">the project plan page</div>
          </td>
        </tr>
      </table>
      <p><b>NOTE - the current structure varies from this, we'd like to move to 
        the common naming scheme for ease of use and standard migration facilities 
        on the eclipse main page. </b></p>
      <p>Files are served from CVS using the CGI script found at http://dev.eclipse.org/viewcvs/indextools.cgi/. 
        The standard main page for project <b>xyz</b> is served up via the URL.</p>
      <p>http://dev.eclipse.org/viewcvs/indextools.cgi/org.eclipse.<b>xyz</b></p>
      <p>This url (http://dev.eclipse.org/viewcvs/indextools.cgi/) can also be 
        used to browse the whole Tools CVS repository. </p>
      <p>You may notice that there is also an http://dev.eclipse.org/viewcvs/index.cgi/ 
        which shows the base platform CVS repository. This script also takes a 
        parameter which selects the other repositories on eclipse.org. To select 
        the tools repository you use ?cvsroot=Tools_Project as the parameter. 
      </p>
      <p>There is a subtle different between index.cgi and indextools.cgi. The 
        index.cgi script has a combo box on the page which allows you to switch 
        between the various CVS repositories at eclipse.org. Currently there are 
        three repositories, one for each of the PMCs and it's subprojects. The 
        indextools.cgi is hardwired to only show the tools repository. Correspondingly, 
        the indextech displays the Technology PMC CVS repository.</p>
      <p>In summary:</p>
      <p><b>index.cgi </b>Default CVS root is ?cvsroot=Eclipse_Project, &nbsp;There 
        is a combo box on page to select alternate repository. The parameters 
        can be &nbsp;?cvsroot=Technology_Project, ?cvsroot=Tools_Project, and 
        of course ?cvsroot=Eclipse_Project </p>
      <p>The CVS access scripts which are tools repository and technology specific 
        are as follows. </p>
      <p><b>indextech.cgi </b>&nbsp; &nbsp; &nbsp; &nbsp;showsTechnology_Project 
        roots, no ?cvsroot parameter allowed, &nbsp;no combo box on page to select 
        repository <br>
        <b>indextools.cgi</b> &nbsp; &nbsp; &nbsp; &nbsp;showsTools_Project roots, 
        no ?cvsroot parameter allowed, &nbsp;no combo box on page to select repository 
        <br>
        &nbsp; <br>
        As a bootstrap mechanism, the PMC will have committer access to xyz-home 
        to assist with web maintenance</p>
      <p><br>
        <b>Builds and Downloads</b><br>
        The project leads are responsible for builds and maintenance on eclipse.org. 
        The frequency of these is dependent on the subproject needs. </p>
      <p>It is the intent of the PMC to pursue the creation of a standard build 
        process infrastructure to allow eclipse.org to provide automated builds 
        and testing for project hosted on eclipse.org. </p>
      <p><b>Getting changes to your infrastructure</b></p>
      <p>If you need changes to your infrastructure, you need to send an email 
        to webmaster@eclipse.org. This includes such things like password reset, 
        creating new components, adding new committers. If you have infra related 
        questions you can also send these to the webmaster and they will determine 
        how to get the right answer. When sending requests to webmaster, please 
        clearly identify the PMC and subproject you are working on so that requests 
        that require PMC approval or clarification can be properly routed to the 
        correct PMC by the infrastructure team.</p>
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
