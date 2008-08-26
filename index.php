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
		<h3>About the Eclipse Tools Project</h3>
		<ul>
      <p>The Eclipse Tools Project is an open source project of eclipse.org, overseen 
        by a <a href="team-leaders.php">Project Management Committee</a> (PMC) 
        and project leaders. The work is done in subprojects working against a 
        <a href="http://dev.eclipse.org/viewcvs/?cvsroot=Tools_Project">CVS repository</a>. 
        The <a href="eclipsetools-charter.php">Eclipse Tools Project Charter</a> 
        describes the organization of the project, roles and responsibilities 
        of the participants, and top level development process for the project. 
      </p>

      <p>For <a href="docs/">documentation</a> describing the <a href="docs/project-guide.php">infrastructure</a> 
        at eclipse.org, our <a href="docs/new-project-process.php">new project 
        process</a> and an archive of <a href="docs/">previous proposals</a> 
        can be found archived <a href="docs/"><strong>here</strong></a>. 
        Tools projects follow the eclipse development process and participate 
        in the eclipse <a href="planning">planning</a> and <a href="architecture">architecture</a> 
        councils. </p>
		</ul>
	</div>
			 
	<div class="homeitem3col">
		<h3>Subprojects</h3>
	
		<ul>

			<li>

				<a href="http://www.eclipse.org/aspectj"><b>AspectJ</b></a>  
    			<br>
			
			  AspectJ is a seamless aspect-oriented extension to the Java programming
			  language that enables clean modularization of crosscutting concerns, such
			  as error checking and handling, synchronization, performance optimizations,
			  monitoring, logging, debugging support, and multi-object protocols.

			</li>

			<li>

				<a href="http://www.eclipse.org/ajdt"><b>AspectJ Development Tools</b></a>  
    			<br>
			
			  The AspectJ Development Tools (AJDT) project provides Eclipse
			  based tool support for Aspect-Oriented Programming with AspectJ. Our goal
			  is to deliver a user experience that is consistent with the Java
			  Development Tools (JDT) when working with AspectJ projects and resources.
			
			</li>

					<li>

       <p><a href="http://www.eclipse.org/buckminster"><b>Buckminster</b></a> 
        <br>
Buckminster is a set of frameworks and tools for automating build, assemble & deploy (BA&D) 
development processes in complex or distributed component-based development. Buckminster allows 
development organizations to define fine-grained "production lines" for the various stages in 
software production - unit testing, integration testing, field deployment, staged migration, etc. 
- and to automate the execution of corresponding processes.
<br /><br />
        <a href="http://www.eclipse.org/buckminster">Read more &raquo;</a>
</p>

		</li>
			
			<li>
			
		      <a href="http://www.eclipse.org/cdt"><b>C/C++ IDE</b></a> 
      <br>
      The CDT (C/C++ Development Tools) Project is working towards providing a 
      fully functional C and C++ Integrated Development Environment (IDE) for 
      the Eclipse platform. Our focus is development on Linux for deployment on 
      Linux, but we are interested in participation from others who would like 
      to extend our work in other directions (e.g. a Windows client, targeting 
      Unix(R) or embedded platforms, wizards for developing applications that 
      use particular library or database or messaging APIs, or extension to other 
      languages). We are looking for contributions from the open source community 
      in the areas of testers, developers and general users who can help us ensure 
      that the C/C++ tools work well on all the Eclipse platforms and compiler 
      environments. There is a <a href="news://news.eclipse.org/eclipse.tools.cdt" target="_top">newsgroup</a> 
      (for access see the <a href="http://www.eclipse.org/newsgroups/index.html" target="_top">newsgroups 
      page</a>) created for technical discussions and questions related to the 
      C/C++ plugin. If you are are developer and want to participate in discussions 
      relating to the implementation of the C/C++ IDE, there are developer <a href="http://www.eclipse.org/mail/index.html" target="_top">mailing 
      lists</a> created for each of the components in the project. Downloads are 
      available <a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/cdt-home/downloads/main.html?cvsroot=Tools_Project">here</a>. 
			</li>

			<li>
			
		<a href="http://www.eclipse.org/cobol"><b>COBOL</b></a>
    	<br>
        The COBOL IDE for Eclipse Subproject will build a fully functional COBOL 
        Integrated Development Environment (IDE) for the Eclipse platform. Our 
        focus is COBOL application development on Windows/Solaris/Linux for deployment 
        on each platform. We are interested in participation from others who would 
        like to extend our work in other directions. e.g. wizards for developing 
        applications that use particular library or database or messaging APIs, 
        or extension to other languages. <br /><br />
      	<a href="http://www.eclipse.org/cobol">Read more &raquo;</a>
			
			</li>
			
			<li>
			
			<a href="http://www.eclipse.org/gef"><b>Graphical Editor Framework (GEF) Project</b></a>
        <br>
        The Graphical Editor Framework (GEF) allows developers to take an existing 
        application model and easily create a rich graphical editor.&nbsp;GEF 
        allows a developer to quickly map any existing model to a graphical editing 
        environment. The graphical environment is the SWT-based drawing plugin 
        "draw2d" (which is part of the overall "GEF" component). The developer 
        can take advantage of the many common operations provided in GEF and/or 
        extend them for the specific domain. GEF is suitable for creating a wide 
        variety of applications, including: flow builders, GUI builders, UML diagram 
        editors (such as work-flow and class modeling diagrams), and even WYSIWYG 
        text editors like HTML. GEF does not assume that you must build one of 
        these applications and is application domain neutral.
        
        <p> There is a <a href="news://news.eclipse.org/eclipse.tools.gef" target="_top">newsgroup</a> 
        (for access see the <a href="http://www.eclipse.org/newsgroups/index.html" target="_top">newsgroups 
        page</a>) created for technical discussions and questions related to the 
        GEF plugin. If you are are developer and want to participate in discussions 
        relating to the implementation of the GEF components, there is a developer 
        <a href="mailto:gef-dev@eclipse.org" target="_top">mailing list</a> created 
        for each of the components in the project. Downloads are available <a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/gef-home/downloads/dl.html?cvsroot=Tools_Project">here</a>. 
      	</p>
			</li>

			<li>

       <p><a href="/mylyn"><b>Mylyn</b></a> <br />
Mylyn is a Task-Focused Interface for Eclipse that reduces information overload and makes multi-tasking easy. It does this by making tasks a first class part of Eclipse, and integrating rich and offline editing for repositories such as Bugzilla, Trac, and JIRA. Once your tasks are integrated, Mylyn monitors your work activity to identify information relevant to the task-at-hand, and uses this task context to focus the Eclipse UI on the interesting information, hide the uninteresting, and automatically find what's related. This puts the information you need to get work done at your fingertips and improves productivity by reducing searching, scrolling, and navigation. By making task context explicit Mylyn also facilitates multitasking, planning, reusing past efforts, and sharing expertise.
<br /><br />
        <a href="/mylyn">Read more &raquo;</a>
</p>

		</li>
			
			
		<li><a href="http://eclipse.org/orbit"><b>Orbit</b></a><br>
		Orbit provides a repository of bundled versions of third party libraries that are approved for 
		use in one or more Eclipse projects. The repository will maintain old versions of such libraries 
		to facilitate rebuilding historical output. It will also clearly indicate the status of the library (i.e., 
		the approved scope of use). The repository will be structured such that the contained bundles 
		are easily obtained and added to a developer's workspace or target platform.
		</li>

			<li>
		<a href="http://www.eclipse.org/pdt"><b>PDT</b></a>  
    	<br>
    	The PDT project is working towards providing a PHP Development Tools 
    	framework for the Eclipse platform. This project will 
    	encompass all development components necessary to develop PHP and will facilitate 
    	extensibility. It will leverage the existing Web Tools Project in providing developers 
    	with PHP capabilities.<br /><br />
        <a href="http://www.eclipse.org/pdt">Read more &raquo;</a>
			</li>

			<li>
		<a href="http://www.eclipse.org/ptp"><b>PTP</b></a>  
    	<br>
        The Parallel Tools Platform (PTP) project aims to produce an open-source, robust, 
        commercial quality platform that provides a highly integrated development environment 
        specifically designed for parallel and high performance computing application 
        development. The project will provide a standardized and portable IDE that 
        supports a large number of parallel and high performance computing architectures and 
        runtime systems, a scalable parallel debugger, and a range of parallel language 
        development tools that will improve the productivity of scientific application 
        developers.<br /><br />
        <a href="http://www.eclipse.org/ptp">Read more &raquo;</a>
			</li>

			<li>

       <p><a href="http://www.eclipse.org/vep"><b>VE</b></a> 
        <br>
        The Eclipse Visual Editor project is a framework for creating GUI builders 
        for Eclipse. It will include reference implementations of Swing/JFC and 
        SWT GUI builders, but intends to be useful for creating GUI builders for 
        other languages such as C/C++ and alternate widget sets, including those 
        that are not supported under Java.<br /><br /> 
        <a href="http://www.eclipse.org/vep">Read more &raquo;</a>
        </p>			
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
