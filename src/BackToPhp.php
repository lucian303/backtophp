<?php

class BackToPhp
{

	public $templateEngine;

	protected $templateEngineClassFile;
	protected $templateEngineClass;

	/**
	 * Just a wrapper function since we can't test it well
	 *
	 * @param $templateEngineClass string the class name
	 * @param $templateEngineClassFile string the class path to require
	 */
	public function __construct($templateEngineClass = null, $templateEngineClassFile = null)
	{
		if ($templateEngineClass && $templateEngineClassFile) {
			$this->setTemplateEngine($templateEngineClass, $templateEngineClassFile);
		}
	}

	/**
	 * Loads a templating engine. Currently only supports Smarty, so no params for the constructor
	 *
	 * @param $templateEngineClass string the class name
	 * @param $templateEngineClassFile string the class path to require
	 * @return BackToPhp
	 */
	public function setTemplateEngine($templateEngineClass, $templateEngineClassFile)
	{
		require_once "$templateEngineClassFile";

		$this->templateEngineClass = $templateEngineClass;
		$this->templateEngine = new $templateEngineClass;

		return $this;
	}

	/**
	 * Run the application on the current input and produce output (stdin/out and/or files)
	 *
	 * @return BackToPhp (fluid interface)
	 */
	public function run()
	{
		return $this;
	}

	/**
	 * Bootstrap and initialize the application, reading cli switches and/or option file for params
	 *
	 * @return BackToPhp (fluid interface)
	 */
	public function bootstrap()
	{
		return $this;
	}

}
