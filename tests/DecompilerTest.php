<?php
require_once "../src/Decompiler.php";

class DecompilerTest extends PHPUnit_Framework_TestCase
{

	public function testSetSmarty3()
	{
		$compiler = new Decompiler();
		$smarty = new Smarty();
		$compiler->setSmartyTemplateEngine($smarty);

		$this->assertTrue($compiler->getTemplateEngine() instanceof Smarty, 'Template Engine is Smarty');
		$this->assertTrue($compiler->getEngineType() == Decompiler::TEMPLATE_ENGINE_SMARTY3, 'Template Engine is Smarty 3++');
	}

}

