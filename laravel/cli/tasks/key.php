<?php namespace Laravel\CLI\Tasks;

use Laravel\Str;
use Laravel\File;
use Laravel\Config;
use Laravel\Request;

class Key extends Task {

	/**
	 * The path to the application config.
	 *
	 * @var string
	 */
	protected $path;

	/**
	 * Create a new instance of the Key task.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->env = Request::env() ? Request::env().'/' : '';

		$this->path = path('app')."config/{$this->env}application".EXT;
	}

	/**
	 * Generate a random key for the application.
	 *
	 * @param  array  $arguments
	 * @return void
	 */
	public function generate($arguments = array())
	{
		// By default the Crypter class uses AES-256 encryption which uses
		// a 32 byte input vector, so that is the length of string we will
		// generate for the application token unless another length is
		// specified through the CLI.
		$key = Str::random(array_get($arguments, 0, 32));

		if (File::exists($this->path)) {
			$config = File::get($this->path);
			$key_placeholder = Config::get('application.key');

			$config = str_replace("'key' => '{$key_placeholder}'", "'key' => '{$key}'", $config);

			File::put($this->path, $config);

			$this->info("An application key {$key} set successfully.");
		} else {
			$this->info("Config/{$this->env}application.php does not exist!");
		}

	}

}