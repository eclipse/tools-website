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
  <h3>The Eclipse Tools Project � Top Level Project Charter � The Eclipse Foundation</h3>

<table border=0 cellspacing=5 cellpadding=0 width="100%" style='width:100.0%;
 mso-cellspacing:3.7pt;margin-left:8.5pt;mso-padding-alt:1.5pt 1.5pt 1.5pt 1.5pt'>
 <tr>
  <td style='padding:1.5pt 1.5pt 1.5pt 1.5pt'>
  <p class=MsoNormal><b><span style='font-size:10.0pt;font-family:Arial'>Overview</span></b><span
  style='font-size:10.0pt;font-family:Arial'><br>
  The Eclipse Tools Top Level Project (the &#8220;Eclipse Tools Project&#8221;) is an open
  source software development project dedicated to developing a wide range of exemplary,
  extensible development tools, and tools-specific components for the Eclipse
  Platform. Typically, this would include tools for computer programming
  languages (compilers, editors), performance tools, debuggers, and test tools.<o:p></o:p></span></p>
  <p><b>Mission</b><br>
  The mission of Eclipse Tools Project is to foster the creation of a wide
  variety of exemplary, extensible tools for the Eclipse Platform. The Eclipse
  Tools Project provides a focal point for diverse tool builders to ensure the
  creation of best of breed tools for the platform, consistent with the
  Purposes of the Eclipse Foundation. The Eclipse Tools Project provides a
  place where a single point for interaction and coordination for all tools
  developers can occur which will minimize overlap and duplication, ensure
  maximum sharing and creation of common components and promote seamless
  interoperation between the diverse types of developed tools.<span
  style="mso-spacerun: yes">&nbsp; </span>The Eclipse Tools Project will
  promote the Eclipse vision and attempt to foster Projects that set the &#8220;gold
  standard&#8221; for tools implementers.</p>
  <p>The Eclipse Tools Project will use its experience in developing tools for
  the Eclipse Platform, to provide technical requirements and feedback to the
  Eclipse PMC.</p>
  <p><b>Scope</b><br>
  The Eclipse Tools Project encompasses the tools being built for the Eclipse
  Platform. The main focus of these tools will be development tools such as
  computer programming language tools (compilers, editors, debuggers),
  performance tools, and test tools.</p>
  <p>The set of tools being built by the Eclipse Tools Project will grow over
  time. Initially, we expect tools like a C/C++ IDE, as well as tools for
  existing languages that don&#8217;t have existing IDEs (Lisp, Scheme). In addition,
  we expect that a wide range of debuggers for programming languages will
  leverage the Eclipse debug frameworks.</p>
  <p>The list of the Projects under the tools PMC will be maintained as an
  addendum to this charter (Attachment A).</p>
  <p><b>Project Management Committee</b><a name=PMC></a><br>
  The Projects under this Charter are managed by a group known as the Project
  Management Committee (the &#8220;PMC&#8221;).</p>
  <p>PMCs are expected to ensure that:</p>
  <p style='margin-left:.5in;text-indent:-.25in;mso-list:l1 level1 lfo2;
  tab-stops:list .5in'><![if !supportLists]><span style='font-family:Symbol'>�<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span><![endif]>All Projects operate effectively by providing
  leadership to guide the Project&#8217;s overall direction and by removing
  obstacles, solving problems, and resolving conflicts.</p>
  <p style='margin-left:.5in;text-indent:-.25in;mso-list:l1 level1 lfo2;
  tab-stops:list .5in'><![if !supportLists]><span style='font-family:Symbol'>�<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span><![endif]>All Project plans, technical documents and reports
  are publicly available</p>
  <p style='margin-left:.5in;text-indent:-.25in;mso-list:l1 level1 lfo2;
  tab-stops:list .5in'><![if !supportLists]><span style='font-family:Symbol'>�<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span><![endif]>All Projects operate using open source rules of
  engagement: meritocracy, transparency, and open participation.<span
  style="mso-spacerun: yes">&nbsp; </span>These principles work together.<span
  style="mso-spacerun: yes">&nbsp; </span>Anyone can participate in a
  Project.<span style="mso-spacerun: yes">&nbsp; </span>This open interaction,
  from answering questions to reporting bugs to making code contributions to
  creating designs, enables everyone to recognize and utilize the
  contributions.</p>
  <p>The PMC has the following responsibilities:</p>
  <ul type=disc>
   <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
       auto;mso-list:l0 level1 lfo5;tab-stops:list .5in'><span
       style='font-size:10.0pt;font-family:Arial'>Providing the leadership and vision
       to guide the Project's overall direction in a manner consistent with the
       Eclipse Foundation Architectural Roadmap.<o:p></o:p></span></li>
   <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
       auto;mso-list:l0 level1 lfo5;tab-stops:list .5in'><span
       style='font-size:10.0pt;font-family:Arial'>Providing assistance and
       support to the developers and researchers working on the Project by
       removing obstacles, solving problems, and resolving conflicts. <o:p></o:p></span></li>
   <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
       auto;mso-list:l0 level1 lfo5;tab-stops:list .5in'><span
       style='font-size:10.0pt;font-family:Arial'>Ensuring that Project plans
       are produced.<o:p></o:p></span></li>
   <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
       auto;mso-list:l0 level1 lfo5;tab-stops:list .5in'><span
       style='font-size:10.0pt;font-family:Arial'>Working with the Eclipse
       Management Organization (the &#8220;EMO&#8221;) to establish the development
       processes and infrastructure needed for the development team to be
       effective. <o:p></o:p></span></li>
   <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
       auto;mso-list:l0 level1 lfo5;tab-stops:list .5in'><span
       style='font-size:10.0pt;font-family:Arial'>Recommending new Projects to
       the EMO.<o:p></o:p></span></li>
   <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
       auto;mso-list:l0 level1 lfo5;tab-stops:list .5in'><span
       style='font-size:10.0pt;font-family:Arial'>Recommending the initial set
       of Project committers for each new Project overseen by the PMC, and
       establishing the procedures consistent with this Charter for voting in
       new committers. <o:p></o:p></span></li>
   <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
       auto;mso-list:l0 level1 lfo5;tab-stops:list .5in'><span
       style='font-size:10.0pt;font-family:Arial'>Helping to ensure that the
       Projects overseen by the PMC have enough contributors, and working to
       fill vacancies in roles. <o:p></o:p></span></li>
   <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
       auto;mso-list:l0 level1 lfo5;tab-stops:list .5in'><span
       style='font-size:10.0pt;font-family:Arial'>Producing &#8220;how to get
       involved&#8221; guidelines to help new potential contributors get started.<o:p></o:p></span></li>
   <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
       auto;mso-list:l0 level1 lfo5;tab-stops:list .5in'><span
       style='font-size:10.0pt;font-family:Arial'>Coordinating relationships
       with other Eclipse Foundation Projects. <o:p></o:p></span></li>
   <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
       auto;mso-list:l0 level1 lfo5;tab-stops:list .5in'><span
       style='font-size:10.0pt;font-family:Arial'>Facilitating code or other donations
       by individuals or companies. <o:p></o:p></span></li>
   <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
       auto;mso-list:l0 level1 lfo5;tab-stops:list .5in'><span
       style='font-size:10.0pt;font-family:Arial'>Making recommendations to the
       Eclipse Foundation Board regarding contributions proposed under licenses
       other than the EPL.<o:p></o:p></span></li>
   <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
       auto;mso-list:l0 level1 lfo5;tab-stops:list .5in'><span
       style='font-size:10.0pt;font-family:Arial'>Working with the EMO and
       Committers to ensure in-bound contributions are made in accordance with
       the Eclipse Foundation IP Policy.<o:p></o:p></span></li>
   <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
       auto;mso-list:l0 level1 lfo5;tab-stops:list .5in'><span
       style='font-size:10.0pt;font-family:Arial'>Acting as a focal point for
       the community in representing the Projects it oversees.<o:p></o:p></span></li>
  </ul>
  <p>The PMC Lead is appointed by the Board. The initial PMC is selected by the
  PMC Lead. Thereafter, to become a member of the PMC, an individual must be
  nominated by another member of the PMC, and unanimously approved by all PMC
  members.</p>
  <p>In the unlikely event that a member of the PMC becomes disruptive to the
  process or ceases to contribute for an extended period, the member may be
  removed by unanimous vote of remaining PMC members.<span style="mso-spacerun:
  yes">&nbsp; </span>PMC members may resign at any time by delivering notice of
  their resignation to the PMC Lead.</p>
  <p>The PMC is responsible for producing and maintaining the Project Charter.
  Development must conform to any rules or processes outlined in the Charter,
  so a change to the development process may necessitate a change to the
  Charter.<span style="mso-spacerun: yes">&nbsp; </span>Changes to the Charter
  are approved by the Board.</p>
  <p>The work of the PMC is shared by the PMC members. All PMC members are
  expected to contribute actively. In particular, PMC members are expected to
  take responsibility for overseeing certain areas of work in the Project, and
  reporting to the PMC on these areas.</p>
  <p>Active participation in the user newsgroups and the appropriate developer
  mailing lists is a responsibility of all PMC members, and is critical to the
  success of the Project. PMC members are required to monitor the main Project
  mailing list, and the developer mailing lists for all Projects and components
  they are overseeing.</p>
  <p><b>Roles</b><br>
  The Projects under this Charter are operated as meritocracies -- the more you
  contribute, and the higher the quality of your contribution, the more you are
  allowed to do. However with this comes increased responsibility.</p>
  <p><b>Users</b><br>
  Users are the people who use the products that the Project produces. People
  in this role aren't contributing code, but they are using the products,
  reporting bugs, and making feature requests and suggestions. Users are
  encouraged to participate through the user newsgroup(s), asking questions, providing
  suggestions, and helping other users. Users are also encouraged to report
  problem reports using the bug tracking system. </p>
  <p><b>Developers</b><br>
  Users who contribute code or documentation become developers. Developers are
  the people who contribute code, fixes, documentation, or other work that goes
  into the product. Developers are also encouraged to participate in the user
  newsgroup(s), and should monitor the developer mailing list associated with
  their area of contribution. When appropriate, developers may also contribute
  to development design discussions related to their area of contribution.
  Developers are expected to be proactive in reporting problems in the bug
  tracking system.</p>
  <p><b>Committers</b><br>
  Developers who give frequent and valuable contributions to a Project, or
  component of a Project (in the case of large Projects), can have their status
  promoted to that of a &quot;Committer&quot; for that Project or component
  respectively. A Committer has write access to the source code repository for
  the associated Project (or component), and gains voting rights allowing them
  to affect the future of the Project (or component).</p>
  <p>In order for a Developer to become a Committer on a particular Project
  overseen by the PMC, another Committer for the same Project (or component as
  appropriate) can nominate that Developer or the Developer can ask to be
  nominated. Once a Developer is nominated, the Committers for the Project (or
  component) will vote. If there are at least 3 positive votes and no negative
  votes, the Developer is recommended to the PMC for commit privileges. If the
  PMC also approves, the Developer is converted into a Committer and given
  write access to the source code repository for that Project (or component).
  Becoming a Committer is a privilege that is earned by contributing and showing
  discipline and good judgement. It is a responsibility that should be neither
  given nor taken lightly.</p>
  <p>At times, Committers may go inactive for a variety of reasons. The
  decision making process of the Project relies on active committers who
  respond to discussions and votes in a constructive and timely manner. The PMC
  is responsible for ensuring the smooth operation of the Project. A Committer
  that is disruptive, does not participate actively, or has been inactive for
  an extended period may have his or her commit status removed by the PMC.</p>
  <p>Active participation in the user newsgroup and the appropriate developer
  mailing lists is a responsibility of all Committers, and is critical to the
  success of the Project. Committers are required to monitor and contribute to
  the user newsgroup.</p>
  <p>Committers are required to monitor the developer mailing list associated
  with all Projects and components for which they have commit privileges. This
  is a condition of being granted commit rights to the Project or component. It
  is mandatory because committers must participate in votes (which in some
  cases require a certain minimum number of votes) and must respond to the
  mailing list in a timely fashion in order to facilitate the smooth operation
  of the Project. When a Committer is granted commit rights they will be added
  to the appropriate mailing lists. A Committer must not be unsubscribed from a
  developer mailing list unless their associated commit privileges are also
  removed.</p>
  <p>Committers are required to track, participate in, and vote on, relevant
  discussions in their associated Projects and components. There are three
  voting responses: +1 (yes), -1 (no, or veto), and 0 (abstain).</p>
  <p>Committers are responsible for proactively reporting problems in the bug tracking
  system, and annotating problem reports with status information, explanations,
  clarifications, or requests for more information from the submitter.
  Committers are responsible for updating problem reports when they have done
  work related to the problem.</p>
  <p><b>Projects</b><br>
  The work under this Top Level Project is further organized into Projects. New
  Projects must be significant works consistent with the mission of the Top
  Level Project, be recommended by the PMC, and confirmed by the EMO. Projects
  can be discontinued by decision of the Board.</p>
  <p>When a new Project is created, the PMC nominates a Project lead to act as
  the technical leader and nominates the initial set of Committers for the
  Project, and these nominations are approved by the EMO.<span
  style="mso-spacerun: yes">&nbsp; </span>Project leads are accountable to the
  PMC for the success of their Project.</p>
  <p><b>Project Components</b><br>
  The PMC may decide to divide a Project further into components. If a Project
  is divided into components, commit privileges are normally granted at the
  component level, and the committers for a given component vote on issues
  specific to that component. Components are established and discontinued by
  the PMC. When the PMC creates a component it appoints a component lead to act
  as the technical leader and names the initial set of Committers for the
  component. The component lead is designated as a committer for the Project
  and represents the component in discussions and votes pertaining to the
  Project as a whole. Component Committers do not participate in votes at the
  level of the Project as a whole, unless they are also the component lead.</p>
  <p><b>Ports</b><br>
  For components that contain platform-specific code (such as SWT), it may be
  advantageous to allow developers to work on a port of the component to a new
  platform without requiring that they already be committers for the component.
  In this case the main code base is known as the component &quot;core&quot;,
  and the port code base is known as a component &quot;port&quot;. The decision
  to set up a port is made by the PMC. When a new port of a component is
  created, the PMC appoints a Port Lead, and an initial set of committers who
  will have commit and voting privileges specifically for the port. The port is
  done under the auspices of the core component, and all committers for the
  core component automatically also have commit and voting privileges on the
  port. Normally the Component Lead will also be the Port Lead.</p>
  <p><b>Infrastructure</b><br>
  The PMC works with the EMO to ensure the required infrastructure for the
  Project.<span style="mso-spacerun: yes">&nbsp; </span>The Project
  infrastructure will include, at minimum:</p>
  <ul type=disc>
   <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
       auto;mso-list:l2 level1 lfo8;tab-stops:list .5in'><span
       style='font-size:10.0pt;font-family:Arial'>Bug Database - Bugzilla
       database for tracking bugs and feature requests. <o:p></o:p></span></li>
   <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
       auto;mso-list:l2 level1 lfo8;tab-stops:list .5in'><span
       style='font-size:10.0pt;font-family:Arial'>Source Repository -- One or
       more CVS repositories containing both the master source code and
       documentation for the Projects. <o:p></o:p></span></li>
   <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
       auto;mso-list:l2 level1 lfo8;tab-stops:list .5in'><span
       style='font-size:10.0pt;font-family:Arial'>Website - A website will
       contain information about the Project, including documentation,
       downloads of releases, and this Charter. <o:p></o:p></span></li>
   <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
       auto;mso-list:l2 level1 lfo8;tab-stops:list .5in'><span
       style='font-size:10.0pt;font-family:Arial'>General Mailing List -
       Mailing list for development discussions pertaining to the Project as a
       whole or that cross Projects. This mailing list is open to the public. <o:p></o:p></span></li>
   <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
       auto;mso-list:l2 level1 lfo8;tab-stops:list .5in'><span
       style='font-size:10.0pt;font-family:Arial'>Project Mailing Lists - Development
       mailing list for technical discussions related to the Project. This
       mailing list is open to the public. <o:p></o:p></span></li>
   <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
       auto;mso-list:l2 level1 lfo8;tab-stops:list .5in'><span
       style='font-size:10.0pt;font-family:Arial'>Component Mailing Lists --
       Development mailing list for technical discussions related to the
       component. This mailing list is open to the public. <o:p></o:p></span></li>
  </ul>
  <p><b>The Development Process</b><br>
  Each Project lead must produce a development plan for the release cycle, and
  the development plan must be approved by the PMC and by a majority of
  Committers of the Project.</p>
  <p>Each Project must identify, and make available on its web site, the
  requirements and prioritizations it is working against in the current release
  cycle. In addition, each Project must post a release plan showing the date
  and content of the next major release, including any major milestones, and
  must keep this plan up to date.</p>
  <p>The Committers of a Project or component decide which changes may be
  committed to the master code base of a Project or component respectively.
  Three +1 ('yes' votes) with no -1 ('no' votes or vetoes) are needed to
  approve a code change. Vetoes must be followed by an explanation for the veto
  within 24 hours or the veto becomes invalid. All votes are conducted via the
  developer mailing list associated with the Project or component.</p>
  <p>Special rules may be established by the PMC for Projects or components
  with fewer than three Committers. For efficiency, some code changes from some
  contributors (e.g. feature additions, bug fixes) may be approved in advance,
  or approved in principle based on an outline of the work, in which case they
  may be committed first and changed as needed, with conflicts resolved by
  majority vote of the Committers of the Project or component, as applicable.
  More restrictive rules for releasing changes may be established by the PMC
  near the end of release cycles or for maintenance streams.</p>
  <p>The master copy of the code base must reside on the Project web site where
  it is accessible to all users, developers and committers. Committers must
  check their changes and new work into the master code base as promptly as
  possible (subject to any check-in voting rules that may be in effect) in
  order to foster collaboration among widely distributed groups and so that the
  latest work is always available to everyone. The PMC is responsible for
  working with the Eclipse Foundation to establish a release engineering and
  build process to ensure that builds can be reliably produced on a regular and
  frequent basis from the master code base and made available for download from
  the Project web site.</p>
  <p>The PMC is responsible for establishing the level of testing appropriate
  for each Project, and approving the test plans.</p>
  <p>All development technical discussions are conducted using the development
  mailing lists. If discussions are held offline, then a summary must be posted
  to the mailing list to keep the other committers informed.</p>
  <p style='tab-stops:45.8pt 91.6pt 137.4pt 183.2pt 229.0pt 274.8pt 320.6pt 366.4pt 412.2pt 458.0pt 503.8pt 549.6pt 595.4pt 641.2pt 687.0pt 732.8pt'><b>Licensing</b><br>
  All contributions to Projects under this Charter must adhere to the Eclipse
  Foundation Intellectual Property Policy.</p>
  <div class=MsoNormal align=center style='text-align:center;tab-stops:45.8pt 91.6pt 137.4pt 183.2pt 229.0pt 274.8pt 320.6pt 366.4pt 412.2pt 458.0pt 503.8pt 549.6pt 595.4pt 641.2pt 687.0pt 732.8pt'>
  <hr size=2 width="100%" align=center>
  </div>
  <p style='tab-stops:45.8pt 91.6pt 137.4pt 183.2pt 229.0pt 274.8pt 320.6pt 366.4pt 412.2pt 458.0pt 503.8pt 549.6pt 595.4pt 641.2pt 687.0pt 732.8pt'><b>Attachment
  A: Eclipse Tools PMC Projects</b></p>
  <p style='tab-stops:45.8pt 91.6pt 137.4pt 183.2pt 229.0pt 274.8pt 320.6pt 366.4pt 412.2pt 458.0pt 503.8pt 549.6pt 595.4pt 641.2pt 687.0pt 732.8pt'>The
  projects that are run by the tools pmc can be found <a
  href="http://www.eclipse.org/tools/" target="_top">here</a>. For a list of
  new, proposed or future directions the tools PMC plans to go, see the Eclipse
  Tools Project&#8217;s <a href="http://www.eclipse.org/tools/docs/road.php">roadmap</a>.
  </p>
  <p style='tab-stops:45.8pt 91.6pt 137.4pt 183.2pt 229.0pt 274.8pt 320.6pt 366.4pt 412.2pt 458.0pt 503.8pt 549.6pt 595.4pt 641.2pt 687.0pt 732.8pt'>&nbsp;</p>
  </td>
  <td style='padding:1.5pt 1.5pt 1.5pt 1.5pt'>
  <p class=MsoNormal style='tab-stops:45.8pt 91.6pt 137.4pt 183.2pt 229.0pt 274.8pt 320.6pt 366.4pt 412.2pt 458.0pt 503.8pt 549.6pt 595.4pt 641.2pt 687.0pt 732.8pt'>&nbsp;</p>
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
