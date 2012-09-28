<?php

require_once "../src/BackToPhp.php";

class BackToPhpTest extends PHPUnit_Framework_TestCase
{

	protected $b2p;

	protected function setUp()
	{
		$this->b2p = new BackToPhp();
		$this->b2p->setTemplateEngine('Smarty', '../../Smarty-2.6.27/libs/Smarty.class.php');
	}

	protected function tearDown() {}

	public function testSetSmartyAsEngine()
	{
		$this->assertTrue($this->b2p->templateEngine instanceof Smarty, "Smarty Templating Engine Set");
	}

}
