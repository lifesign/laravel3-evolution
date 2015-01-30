<?php

class EventTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tear down the testing environment.
	 */
	public function tearDown()
	{
		unset(Event::$events['test.event']);
	}

	/**
	 * Test basic event firing.
	 *
	 * @group laravel
	 */
	public function testListenersAreFiredForEvents()
	{
		Event::listen('test.event', function() { return 1; });
		Event::listen('test.event', function() { return 2; });

		$responses = Event::fire('test.event');

		$this->assertEquals(1, $responses[0]);
		$this->assertEquals(2, $responses[1]);
	}

	/**
	 * Test multiple listener
	 *
	 * @group laravel
	 */
	public function testMultipleListenersAreFiredWithSameResults()
	{
		Event::listen(array('start', 'over'), function() { return 'ring'; });

		$responses1 = Event::fire('start');
		$responses2 = Event::fire('over');

		$this->assertEquals('ring', $responses1[0]);
		$this->assertEquals('ring', $responses2[0]);
	}

	/**
	 * Test wildcard listener
	 *
	 * @group laravel
	 */
	public function testWildcardListenCanBeFired()
	{
		Event::listen('foo.*', function() { return 1; });

		$responses1 = Event::fire('foo.bar');
		$responses2 = Event::fire('foo.baz');

		$this->assertEquals(1, $responses1[0]);
		$this->assertEquals(1, $responses2[0]);
	}


	/**
	 * Test listener priority
	 *
	 * @group laravel
	 */
	public function testSameListenCanBePrioritized()
	{
		Event::listen('test.event', function() { return 1; }, 1);
		Event::listen('test.event', function() { return 2; }, 10);

		$responses = Event::fire('test.event');

		$this->assertEquals(2, $responses[0]);
		$this->assertEquals(1, $responses[1]);
	}

	/**
	 * Test parameters can be passed to event listeners.
	 *
	 * @group laravel
	 */
	public function testParametersCanBePassedToEvents()
	{
		Event::listen('test.event', function($var) { return $var; });

		$responses = Event::fire('test.event', array('Taylor'));

		$this->assertEquals('Taylor', $responses[0]);
	}

}