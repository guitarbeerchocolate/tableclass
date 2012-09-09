<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Table class page</title>
<!--[if IE]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link rel="stylesheet" href="http://meyerweb.com/eric/tools/css/reset/reset.css" />
<style>
body
{
	font-family:Sans-serif;
	line-height:1.5em;
}

th
{
	background:LightCyan;
}

td, th
{
	border:1px solid #DDDDDD;
	padding:4px;
}
</style>
</head>
<body>
<?php
require_once 'classes/table.class.php';
$t = new table;
// $t->addHeader(Array('Website name','Address'));
// $t->addSingleRow(Array('BBC','http://www.bbc.co.uk'));
echo $t->getTable();
?>
</body>
</html>