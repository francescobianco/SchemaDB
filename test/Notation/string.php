<?php

##
require_once '../../src/SourceForge/SchemaDB/autoload.php';

##
use SourceForge\SchemaDB;

##
$notations = array(	
		
	## String 
	"",
	"Hello World!",
	SchemaDB\Table::VARCHAR,
	SchemaDB\Table::TEXT,
	 
);

?>

<table border=1 cellpadding=4>
	<tr><th>Notation</th><th>Value</th><th>Type</th><th>Column</th></tr>
	
	<?php foreach($notations as $notation) { ?>
		<tr>
			<td><pre><?php var_dump($notation); ?></pre></td>
			<td align="center"><?=SchemaDB\Parser::getValue($notation)?></td>
			<td align="center"><strong><?=SchemaDB\Parser::getType($notation)?></strong></td>
			<td><pre><?=var_dump(SchemaDB\Parser::parseSchemaTableColumn($notation))?></pre></td>
		</tr>
	<?php } ?>
</table>