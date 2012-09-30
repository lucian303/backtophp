<?php

require_once "../src/BackToPhp.php";
require_once "../src/TemplateEngine.php";

class BackToPhpTest extends PHPUnit_Framework_TestCase
{

	/** @var $b2p BackToPhp */
	protected $b2p;

	protected function setUp()
	{
		$this->b2p = new BackToPhp();
		$this->b2p->setTemplateEngine('TemplateEngine', '../../Smarty-2.6.27/libs/Smarty.class.php');
	}

	protected function tearDown()
	{
	}

	public function testSetSmartyAsEngine()
	{
		$this->assertTrue($this->b2p->templateEngine instanceof Smarty, "Smarty Templating Engine Set");
	}

	public function testSetSmartyAsTemplateEgine()
	{
		$this->assertTrue($this->b2p->templateEngine instanceof TemplateEngine, "TemplateEngine Abstraction used");
	}

	public function testRun()
	{
		$result = $this->b2p->run();
		$this->assertTrue($result == true);
	}

	public function testBootstrap()
	{
		$result = $this->b2p->bootstrap();
		$this->assertTrue($result == true);
	}

}
