<?php

class BackToPhp
{

	public $templateEngine;

	protected $templateEngineClassFile;
	protected $templateEngineClass;

	public function __construct($templateEngineClass, $templateEngineClassFile)
	{
		$this->setTemplateEngine($templateEngineClass, $templateEngineClassFile);
	}

	public function setTemplateEngine($templateEngineClass, $templateEngineClassFile)
	{
		require_once "$templateEngineClassFile";

		$this->templateEngineClass = $templateEngineClass;
		$this->templateEngine = new $templateEngineClass;
		return $this;
	}

}

$b2p = new BackToPhp("Smarty", '../../Smarty-2.6.27/libs/Smarty.class.php');
var_dump($b2p->templateEngine);
