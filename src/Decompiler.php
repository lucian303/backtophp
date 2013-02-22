<?php

class Decompiler
{

	const TEMPLATE_ENGINE_TWIG = 1;
	const TEMPLATE_ENGINE_SMARTY2 = 2;
	const TEMPLATE_ENGINE_SMARTY3 = 3;

	protected $templateEngine;
	protected $engineType;

	public function decompile()
	{
		$result = '';
		$result .= "<!--View Start-->";

		// TODO: call compile and get output then run through tidy

		$result .= "<!--View End-->";
		return $result;
	}

	public function setSmartyTemplateEngine(Smarty $templateEngine)
	{
		$this->templateEngine = $templateEngine;

		// Test for Smarty 3
		try {
			$smarty3Version = explode('-', Smarty::SMARTY_VERSION);
			$smarty3Version = $smarty3Version[1];

			if (version_compare($smarty3Version, '3.0.0.0', '>=')) {
				$this->engineType = self::TEMPLATE_ENGINE_SMARTY3;
			}
		} catch (Exception $e) {
		}


		return $this;
	}

	public function getTemplateEngine()
	{
		return $this->templateEngine;
	}

	public function getEngineType()
	{
		return $this->engineType;
	}

}