<?php

// Note: the HTML input files should have &nbsp; coded as &#160; to survive xsl transforms
// also '&' should be coded as '&amp;'
//
ini_set("display_errors", "true");
error_reporting (E_ALL);

require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();  #include($App->getProjectCommon());  # All on the same line to unclutter the user's desktop'

$pageKeywords	= "Eclispe Simultaneous Release";
$pageAuthor		= "David Williams";
$root = $_SERVER['DOCUMENT_ROOT'];
$theme = "Nova";

$xhtmlFile="EclipseSimultaneousRelease.html";

if (file_exists($xhtmlFile)) {

	# Generate the web page
	// Load the XML source
	$xml = new DOMDocument;
	$xml->loadHTMLFile($xhtmlFile);

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
	<!-- include empty lef nav col for now -->
	<div id="leftcol">
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</div>

	
	<div id="maincontent">
	<div id="midcolumn">$maincontent</div>
	</div>

EOHTML;
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);

} else {
	$pageTitle="File Not Found";
	if ($xhtmlFile == "") {
		$html="<p>Error: XHTML file did not provided.</p>";
	}
	else {
		$html="<p>Error: There is no file named <b>" . $xhtmlFile . "</b></p>";
	}
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);

}
?>
