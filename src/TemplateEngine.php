<?php

require_once '../lib/Smarty-3.1.12/libs/Smarty.class.php';

class TemplateEngine extends Smarty
{

	public function getPhp()
	{
		$output = '<?php print "Hello World";';
		return $output;
	}

}
