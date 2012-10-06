<?php

require_once __DIR__ . '/../vendor/autoload.php';

class BackToPhp
{

	public $autoLoader;
	public $log;

	protected $templateEngine;
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

	public function getTemplateEngine()
	{
		return $this->templateEngine;
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
		$this->initAutoLoader();
		$this->initLog();

		return $this;
	}

	/**
	 * Sets up the standard ZF2 Autoloader. It's not the most efficient
	 * but requires the least setup. Since we'll only be using a couple of
	 * Zend modules it should be no problem
	 *
	 * @return BackToPhp
	 */
	protected function initAutoLoader()
	{
		require_once __DIR__ . '/../lib/Zend/Loader/StandardAutoloader.php';

		$this->autoLoader = new Zend\Loader\StandardAutoloader(array('autoregister_zf' => true));
		$this->autoLoader->register();
		return $this;
	}

	/**
	 * Initializes log to file
	 *
	 * @return BackToPhp
	 */
	protected function initLog()
	{
		$this->log = new Zend\Log\Logger();
		return $this;
	}

}
