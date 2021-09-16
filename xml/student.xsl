<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html>
<head>
<style>
table,th,td
{

border:1px solid black;
border-collapse:collapse;
}
</style>
</head>
<body>
<h2>VTU Student Details</h2>
<table>
<tr bgcolor="#EEDD82" >
<th> USN</th>
<th> Name </th>
<th>College </th>
<th> Branch </th>
<th> Year </th>
<th> Email ID </th>
</tr>
<xsl:for-each select="VTU/STUDENT">
<tr>
<td><xsl:value-of select="USN"/></td>
<td><xsl:value-of select="NAME"/></td>
<td><xsl:value-of select="COLLEGE"/></td>
<td><xsl:value-of select="BRANCH"/></td>
<td><xsl:value-of select="YEAR"/></td>
<td><xsl:value-of select="EMAILID"/></td>
</tr>
</xsl:for-each>
</table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>