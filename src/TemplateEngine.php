<?php

require_once '../lib/Smarty-2.6.27/libs/Smarty.class.php';

class TemplateEngine extends Smarty
{

	public function getPhp()
	{
		$output = '<?php print "Hello World";';
		return $output;
	}

}
