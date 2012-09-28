<?php
require_once "../src/TemplateEngine.php";

class TemplateEngineTest extends PHPUnit_Framework_TestCase
{

	public function testSmartyInstance()
	{
		$templateEngine = new TemplateEngine();
		$this->assertTrue($templateEngine instanceof Smarty);
	}

}

