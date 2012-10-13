<?php

require_once 'bootstrap.php';
require_once BASE_DIR . "/src/Decompiler.php";

class DecompilerTest extends PHPUnit_Framework_TestCase
{

	public function testSetSmarty3()
	{
		$decompiler = new Decompiler();
		$smarty = new Smarty();
		$decompiler->setSmartyTemplateEngine($smarty);

		$this->assertTrue($decompiler->getTemplateEngine() instanceof Smarty, 'Template Engine is Smarty');
		$this->assertTrue($decompiler->getEngineType() == Decompiler::TEMPLATE_ENGINE_SMARTY3, 'Template Engine is Smarty 3++');
	}

    public function testDecompile()
    {
        $decompiler = new Decompiler();
        $smarty = new Smarty();
        $decompiler->setSmartyTemplateEngine($smarty);

        $result = $decompiler->decompile();
        $this->assertNotEmpty($result);
    }

}

