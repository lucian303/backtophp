<?php

class Decompiler
{

	const TEMPLATE_ENGINE_SMARTY2 = 1;
	const TEMPLATE_ENGINE_SMARTY3 = 2;
	const TEMPLATE_ENGINE_TWIG = 3;

	protected $templateEngine;
	protected $engineType;

	public function compile()
	{

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
		} catch (Exception $e) {}


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