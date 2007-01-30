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
 	
      <li><b>John Duimovich (john_duimovich at ca.ibm.com)</b><br>
        John Duimovich, IBM distinguished engineer, has been the lead designer 
        and implementor for OTI/IBM&#146;s virtual machine technology for the 
        past ten years. He has designed virtual machines for a wide range of platforms, 
        from the implementations for embedded and real time systems to those for 
        IBM mainframe systems. John has played a key role in the development of 
        ENVY/Smalltalk, VA/Micro Edition, and VA/Java Java IDEs. John serves as 
        the lead of the Eclipse Tools PMC. He is also a member of the Eclipse 
        Technology PMC. </p>
      </li>
 
      <li><b>Doug Schaefer (DSchaefer at qnx.com)</b><br>
        Doug Schaefer is the lead for the CDT project and a Senior Software Developer
        at QNX Software Systems. Doug has been involved in the software development
        tools industry for over a decade including stints at Nortel Networks, ObjecTime,
        Rational, and IBM. He has focused mainly on software modelling with particular
        interest in parsing, code models, and code generation. Now with QNX, he has
        also re-acquired his enthusiasm for embedded systems development where he
        started his career.
 
      </li>
 
      <li><b>Erich Gamma (erich_gamma at ch.ibm.com)</b><br>
        Erich is the lead of the Eclipse Java development environment. Prior to 
        working on Eclipse Erich has contributed to VA/Micro Edition (part of 
        IBM's Java solution for embedded device programming). Erich is well known 
        for his work on Design Patterns and <a href="http://www.junit.org/" target="_top">JUnit</a>. 
        Erich is leader of the JDT subproject, and component lead for the JDT 
        UI. Erich is also a member of the <a href="../eclipse/team-leaders.php"> 
        Platform PMC</a>.</p>
      </li>
      
     <li><b>Jeff McAffer (jeff_mcaffer at ca.ibm.com)</b><br>
      Jeff McAffer leads the Eclipse <a href="http://eclipse.org/equinox">Equinox OSGi</a>, <a href="http://eclipse.org/rcp">RCP</a> 
      and <a href="http://eclipse.org/orbit">Orbit</a> teams and is a 
      Senior Technical Staff Member with IBM Rational.  He is one of the architects of the 
      Eclipse Platform and a co-author of <a href="http://eclipsercp.org">The Eclipse Rich Client Platform</a> (Addison-Wesley).  
      He is a member of the <a href="http://eclipse.org/eclipse/team-leaders.php">Eclipse Project PMC</a>, 
      the <a href="http://eclipse.org/tools/team-leaders.php">Tools Project PMC</a> and the Eclipse 
      Foundation Board of Directors.  Jeff is currently interested all aspects of Eclipse componentry 
      from developing and building bundles to deploying, installing and ultimately running them. 
      Previous lives included work in distributed/parallel OO computing (Server Smalltalk, massively 
      parallel Smalltalk, etc) as well as expert systems, meta-level architectures and a PhD at 
      the University of Tokyo.
      </li>
    </ul>
 </div>
  
  
  <div class="homeitem" style="width: 97%">
  <h3>Subproject Leaders</h3>
  
    <ul>

	  <li><b><a href="http://www.eclipse.org/aspectj"><b>AspectJ</b></a></b><br>
	  <b>Adrian Colyer (adrian.colyer at interface21.com)</b><br>
	  <b>Andrew Clement (clemas at uk.ibm.com)</b>
	  </li>

	  <li><b><a href="http://www.eclipse.org/ajdt"><b>AspectJ Development Tools</b></a></b><br>
	  <b>Matt Chapman (mchapman at uk.ibm.com)</b>
	  </li>

	  <li><b><a href="http://www.eclipse.org/cdt"><b>C/C++ IDE</b></a></b><br>
	  <b>Doug Schaefer (DSchaefer at qnx.com)</b>
	  </li>

	  <li><b><a href="http://www.eclipse.org/cobol"><b>COBOL</b></a></b><br>
	  <b>Ron Langer (rjl at fsw.fujitsu.com)</b>
	  </li>

	  <li><b><a href="http://www.eclipse.org/gef"><b>GEF</b></a></b><br>
	  <b>Anthony Hunter</b>
	  </li>

	  <li><b><a href="http://www.eclipse.org/orbit"><b>Orbit</b></a></b><br>
	  <b>Jeff McAffer</b>
	  </li>

	  <li><b><a href="http://www.eclipse.org/php"><b>PDT</b></a></b><br>
	  <b>Yossi Leon</b>
	  </li>

	  <li><b><a href="http://www.eclipse.org/vep"><b>Visual Editor</b></a></b><br>
	  <b>Joe Winchester</b>
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
