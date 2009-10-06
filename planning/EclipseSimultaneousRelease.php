<?php

// Note: the HTML input files should have &nbsp; coded as &#160; to survive xsl transforms
// also '&' should be coded as '&amp;'
//


require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

$pageKeywords	= "Eclispe Simultaneous Release";
$pageAuthor		= "David Williams";
$root = $_SERVER['DOCUMENT_ROOT'];

$xhtmlFile="EclipseSimultaneousRelease.html";

if (file_exists($xhtmlFile)) {

	# Generate the web page
	// Load the XML source
	$xml = new DOMDocument;
	$xml->loadxhtmlFile($xhtmlFile);

	//Set the page title
	$xpath = new DOMXPath($xml);
	$titleNode = $xpath->query("/html/head/title")->item(0);
	// echo "<br />titleNodeValue: " . $titleNode->nodeValue;
	$pageTitle = ($titleNode != null) ? $titleNode->childNodes->item(0)->nodeValue : "planning page";

	$xsl = DOMDocument::load('planningnova.xsl');
	// Configure the transformer
	$proc = new XSLTProcessor;
	$proc->importStyleSheet($xsl); // attach the xsl rules

	// work on just the body of the original (not head, etc.)
	$xmlbody=$xml->getElementsByTagName('body')->item(0);
	$maincontent = $proc->transformToXML($xmlbody);
	$html = <<<EOHTML
	<div id="maincontent">
	<div id="midcolumn">
	<p>
	$maincontent
		</p>
	</div>
</div>

EOHTML;
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);

} else {
	$pageTitle="File Not Found";
	if ($xhtmlFile == "") {
		$html="<p>Error: XHTML file did not provided.</p>";
	}
	else {
		$html="<p>There is no file named " . $meetingDate . "</p>";
	}
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);

}
?>