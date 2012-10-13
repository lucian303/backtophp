<?php
require_once 'bootstrap.php';
require_once BASE_DIR . "/src/TemplateEngine.php";

class TemplateEngineTest extends PHPUnit_Framework_TestCase
{

	public function testSmartyInstance()
	{
		$templateEngine = new TemplateEngine();
		$this->assertTrue($templateEngine instanceof Smarty);
	}

	public function testGetPhp()
	{
		$templateEngine = new TemplateEngine();
		$phpOutput = $templateEngine->getPhp();
		$this->assertTrue(strlen($phpOutput) > 0, "Got some output, hopefully php");
		$this->assertTrue(strpos($phpOutput, '<?php') !== false, 'Got php opening tag');
	}

}

