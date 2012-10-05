<?php
require_once "../src/Decompiler.php";

class DecompilerTest extends PHPUnit_Framework_TestCase
{

	public function testSetSmarty3()
	{
		$compiler = new Decompiler();
		$smarty = new Smarty();
		$engine = $compiler->setSmartyTemplateEngine($smarty);

		$this->assertTrue($engine instanceof Smarty);
		$this->assertTrue($compiler->getEngineType() == Decompiler::TEMPLATE_ENGINE_SMARTY3);
	}

}

