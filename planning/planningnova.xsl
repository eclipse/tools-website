<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:output omit-xml-declaration="yes" />
    <xsl:template match="html">
        <div id="midcolumn">
            <xsl:apply-templates select="body/h1" mode="banner" />
            <xsl:apply-templates select="body/*" />
        </div>
    </xsl:template>
    <xsl:template match="h1" mode="banner">
        <div class="wtpbanner">
            <table>
                <tr>
                    <td width="60%">
                        <h1>
                            <xsl:value-of select="." />
                        </h1>
                        <div class="wtpsubtitle">
                            <xsl:value-of select="/html/head/title" />
                        </div>
                    </td>
                    <td>
                        <img src="/webtools/images/wtplogosmall.jpg" alt="WTP Logo" align="middle" height="129"
                            hspace="50" width="207" usemap="logomap" />
                        <map id="logomap" name="logomap">
                            <area coords="0,0,207,129" href="/webtools/" alt="WTP Home" />
                        </map>
                    </td>
                </tr>
            </table>
        </div>
    </xsl:template>
    <xsl:template match="h1" />
    <xsl:template match="*|@*|text()">
        <xsl:copy>
            <xsl:apply-templates select="*|@*|text()" />
        </xsl:copy>
    </xsl:template>
</xsl:stylesheet>
