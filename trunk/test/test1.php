<?php
require_once('../schemadb.php');

$host = 'm-04.th.seeweb.it';	## database host 
$user = 'javanile93298';		## database username
$pass = 'java90898';			## database password
$name = 'javanile93298';		## database name	
$pref = 'demo2_';				## table prefix

schemadb_debug(true);
schemadb_connect($host,$user,$pass,$name,$pref);

schemadb_apply(array(
	
	'table1' => array(
		'ids'	=> MYSQL_PRIMARY_KEY,
		'id'	=> MYSQL_INT10,
		'surn'	=> MYSQL_VARCHAR255,
		'yer'	=> array(10,12,14),
	),
	
	'table2' => array(
		'id' => MYSQL_PRIMARY_KEY,
	),
	
));
