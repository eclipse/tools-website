<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:output omit-xml-declaration="yes" />
    <xsl:template match="html">
        <div id="midcolumn">
            <xsl:apply-templates select="body/*" />
        </div>
    </xsl:template>
    <xsl:template match="*|@*|text()">
        <xsl:copy>
            <xsl:apply-templates select="*|@*|text()" />
        </xsl:copy>
    </xsl:template>
</xsl:stylesheet>
