<?php

require_once "../src/BackToPhp.php";

class BackToPhpTest extends PHPUnit_Framework_TestCase
{

	protected function setUp() {}

	protected function tearDown() {}

	public function testSetSmartyAsEngine()
	{
		$b2p = new BackToPhp();
		$b2p->setTemplateEngine('Smarty', '../../Smarty-2.6.27/libs/Smarty.class.php');
		$this->assertTrue($b2p->templateEngine instanceof Smarty, "Smarty Templating Engine Set");
	}

}
