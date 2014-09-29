<?php defined('SYSPATH') or die('No direct script access.');

/**
 * @group  Application
 */
class SimpleTest extends Kohana_Unittest_TestCase
{
	public function testAdd()
	{
		$this->assertEquals(4, 2 + 2);
	}
}