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
		$this->b2p->setTemplateEngine('TemplateEngine', '../lib/Smarty-2.6.27/libs/Smarty.class.php');
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
		$this->assertTrue($result instanceof BackToPhp);
	}

	public function testBootstrap()
	{
		$result = $this->b2p->bootstrap();
		$this->assertTrue($result instanceof BackToPhp);
	}

	public function testInitAutoLoader()
	{
		require_once '../lib/Zend/Loader/StandardAutoloader.php';

		$this->b2p->bootstrap();
		$autoLoader = $this->b2p->autoLoader;
		$this->assertTrue($autoLoader instanceof Zend\Loader\SplAutoloader);
	}

	/**
	 * @depends testInitAutoLoader
	 */
	public function testInitLog()
	{
		$this->b2p->bootstrap();
		$log = $this->b2p->log;
		$this->assertTrue($log instanceof Zend\Log\Logger);
	}

}
