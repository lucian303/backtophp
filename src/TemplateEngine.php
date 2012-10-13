<?php

require_once 'bootstrap.php';
require_once BASE_DIR . '/lib/Smarty-3.1.12/libs/Smarty.class.php';

class TemplateEngine extends Smarty
{

	public function getPhp()
	{
		$output = '<?php print "Hello World";';
		return $output;
	}

}
