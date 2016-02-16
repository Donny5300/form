<?php namespace Donny5300\Form\Console;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class FormCommand extends Command
{
	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'auto-form:generate';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Generate a new Form';

	/** @var \Illuminate\Config\Repository */
	protected $config;

	/** @var \Illuminate\Filesystem\Filesystem */
	protected $files;

	/** @var \Illuminate\View\Factory */
	protected $view;

	/**
	 * AutoFormCommand constructor.
	 *
	 * @param $config
	 * @param Filesystem $files
	 * @param $view
	 */
	public function __construct(
		/*ConfigRepository */
		$config,
		Filesystem $files, /* Illuminate\View\Factory */
		$view
	)
	{
		$this->config = $config;
		$this->files  = $files;
		$this->view   = $view;
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return void
	 */
	public function fire()
	{

	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return [
			[

			],
		];
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return [

		];
	}

}
