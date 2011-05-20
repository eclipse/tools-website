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
  <h3>Who's running this project?</h3>

	<ul>
      <p>This page lists the people that are currently playing the PMC and subproject 
        leadership roles described in the <a href="eclipsetools-charter.php">project 
        charter</a>. We welcome new people who want to get involved and can make 
        a contribution. The Eclipse Tools Project is a meritocracy. The more you 
        contribute the more responsibility you will earn. </p>
      <p>Our email addresses are show below in &quot;disguised&quot; form as a 
        spam control measure. But we ask that you do not email us directly. Instead 
        - use the mailing list for <a href="mailto:tools-dev@eclipse.org">tools</a>. 
        Additional <a href="../mail/index.html" target="_top">mailing lists</a> 
        have been set up for each subproject, and are the best way for developers 
        to get involved.</p>
      <p>The Eclipse Tools Project is managed by a small group known as the Eclipse 
        Tools Project Management Committee (<a href="eclipsetools-charter.php#PMC">PMC</a>). 
        The work of the Project will be organized into subprojects, much like 
        the Eclipse Project itself. Each subproject has a leader who has overall 
        responsibility for its success. Large subprojects are further divided 
        into component teams, each of who has a leader that is responsible for 
        its overall success.</p>
	</ul>
</div>

 <div class="homeitem" style="width: 97%">
  <h3>Project Management Committee</h3>
 
 	<ul>
 	
      <li><b>John Duimovich</b> (john_duimovich at ca.ibm.com)<br />
        John Duimovich, IBM distinguished engineer, has been the lead designer 
        and implementor for OTI/IBM&#146;s virtual machine technology for the 
        past ten years. He has designed virtual machines for a wide range of platforms, 
        from the implementations for embedded and real time systems to those for 
        IBM mainframe systems. John has played a key role in the development of 
        ENVY/Smalltalk, VA/Micro Edition, and VA/Java Java IDEs. John serves as 
        the lead of the Eclipse Tools PMC. He is also a member of the Eclipse 
        Technology PMC. </p>
      </li>
 
      <li><b>Anthony Hunter</b> (anthonyh at ca.ibm.com)<br />
      <p>Anthony Hunter is a software development manager at IBM Rational 
      Software in Canada. He is the project lead and committer for the 
      Eclipse GMF Runtime and Eclipse GEF as well as committer for the 
      Tabbed Properties View in the Eclipse platform.</p>

	  <p>Anthony contributes to the Rational modeling product lines, 
	  specifically IBM Rational Software Architect. He has historically 
	  contributed to Eclipse based products such as WebSphere Studio 
	  Application Developer and IBM Rational XDE, and has been actively 
	  working with the Eclipse platform since its inception.</p>
      </li>
      
      <li><b>Doug Schaefer</b> (Doug.Schaefer at windriver.com)<br />
        Doug Schaefer is the lead for the CDT project and an Engineering Manager
        at Wind River Systems. Doug has been involved in the software development
        tools industry for over a decade including stints at Nortel, ObjecTime,
        Rational, IBM, and QNX. He has focused mainly on software modeling with particular
        interest in parsing, code models, and code generation. Now with Wind River, he
        manages the team putting together Wind River's next generation software distribution
        technology based on Eclipse p2. He also remains involved with the CDT working on
        his Wascana Eclipse/MinGW tools distribution as well is getting more and more
        involved in open platforms for embedded development.
 
      </li>
 
     <li><b>Jeff McAffer</b> (jeff at eclipsesource.com)<br />
      Jeff McAffer leads the Eclipse <a href="http://eclipse.org/equinox">Equinox OSGi</a>, and <a href="http://eclipse.org/rcp">RCP</a>. 
      He is one of the architects of the 
      Eclipse Platform and a co-author of <a href="http://eclipsercp.org">The Eclipse Rich Client Platform</a> (Addison-Wesley).  
      He is a member of the <a href="http://eclipse.org/eclipse/team-leaders.php">Eclipse Project PMC</a>, 
      the <a href="http://eclipse.org/tools/team-leaders.php">Tools Project PMC</a> and the Eclipse 
      Foundation Board of Directors.  Jeff is currently interested all aspects of Eclipse componentry 
      from developing and building bundles to deploying, installing and ultimately running them. 
      Previous lives included work in distributed/parallel OO computing (Server Smalltalk, massively 
      parallel Smalltalk, etc) as well as expert systems, meta-level architectures and a PhD at 
      the University of Tokyo.
      </li>
      
      <li><b>David Williams</b> (david_williams at us.ibm.com)</br>
       <p>David is the PMC Lead for the Eclipse Web Tools Platform as well 
       as being a member of the Tools PMC. He also leads the 
       Eclipse Foundation's Planning Council.</p>

       <p>David is a developer at IBM Rational's RTP Lab in North Carolina 
       and has worked with Eclipse since 2001, initially creating 
       Eclipse-based products (WSAD) and then becoming a committer 
       in 2004 for source editors in WTP.</p>

       <p>Prior to reaching this pinnacle, David was a lab-based 
       service consultant, directly helping IBM customers 
       adopt object oriented technology and design web-based 
       applications, first using Smalltalk and then later Java. 
       For the decade prior to that, David was responsible 
       for Human Factors and Usability of a number of IBM 
       Products, following his MA in Quantitative Psychology and 
       Cognitive Science from University of Colorado at Boulder. </p>
      </li>      
    </ul>
 </div>
  
  
  <div class="homeitem" style="width: 97%">
  <h3>Subproject Leaders</h3>
  <!-- removed old, out of date section on 05/20/2011. This whole section could probably be deleted
         but left here temporarily for some continutity --> 
  <p>Please see the <a href="http://www.eclipse.org/projects/listofprojects.php#tools">Tools project master list</a>
        for a list of all subprojects in the Tools Projects, and click on a specific one of those to see the subproject leaders, and other 
        information about the subproject.<p>
    
  </div>

		<hr class="clearer" />

	</div>

</div>


EOHTML;


# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
