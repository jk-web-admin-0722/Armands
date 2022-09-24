<?php
if (isset($_COOKIE['lang'])) {
	$ch=$_COOKIE['lang'];
}
else {
	$ch="uk";
}

$q = mysql_query("select defination, name_".$ch." from prog_languages ") or die (mysql_error());
	while ($language = mysql_fetch_row($q)) {
		define(''.$language[0].'', ''.$language[1].'');
	}
?>