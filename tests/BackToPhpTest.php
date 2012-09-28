<?php

require_once "../src/BackToPhp.php";

class BackToPhpTest extends PHPUnit_Framework_TestCase
{

	public function testSetSmartyAsEngine()
	{
		$b2p = new BackToPhp('Smarty', '../../Smarty-2.6.27/libs/Smarty.class.php');
		$class = get_class($b2p->templateEngine);
		$this->assertTrue($class == 'Smarty', "Smarty Templating Engine Set");
	}

}
