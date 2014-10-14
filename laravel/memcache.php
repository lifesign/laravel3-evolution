<?php namespace Laravel;

class Memcache {

	/**
	 * The Memcache connection instance.
	 *
	 * @var Memcache
	 */
	protected static $connection;

	/**
	 * Get the Memcache connection instance.
	 *
	 * <code>
	 *		// Get the Memcache connection and get an item from the cache
	 *		$name = Memcache::connection()->get('name');
	 *
	 *		// Get the Memcache connection and place an item in the cache
	 *		Memcache::connection()->set('name', 'Taylor');
	 * </code>
	 *
	 * @return Memcache
	 */
	public static function connection()
	{
		if (is_null(static::$connection))
		{
			static::$connection = static::connect(Config::get('cache.memcache'));
		}

		return static::$connection;
	}

	/**
	 * Create a new Memcache connection instance.
	 *
	 * @param  array      $servers
	 * @return Memcache
	 */
	protected static function connect($servers)
	{
		$memcache = new \Memcache;

		foreach ($servers as $server)
		{
			$memcache->addServer(
				$server['host'],
				$server['port'],
				$server['persistent'],
				$server['weight'],
				$server['timeout']
			);
		}

		if ($memcache->getVersion() === false)
		{
			throw new \Exception('Could not establish memcached connection.');
		}

		return $memcache;
	}

	/**
	 * Dynamically pass all other method calls to the Memcache instance.
	 *
	 * <code>
	 *		// Get an item from the Memcache instance
	 *		$name = Memcache::get('name');
	 *
	 *		// Store data on the Memcache server
	 *		Memcache::set('name', 'Taylor');
	 * </code>
	 */
	public static function __callStatic($method, $parameters)
	{
		return call_user_func_array(array(static::connection(), $method), $parameters);
	}

}