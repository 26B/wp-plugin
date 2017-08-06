<?php

namespace [namespace_tests]

class SampleTest extends PHPUnit_Framework_TestCase {

	/**
	 * Setup mocking functions.
	 */
	public function setUp() {
		\WP_Mock::setUp();
	}

	/**
	 * Destroy mocking functions.
	 */
	public function tearDown() {
		\WP_Mock::tearDown();
	}

	/**
	 * @covers SampleTest
	 */
	public function test_sample() {
		$this->assertTrue(true);
	}
}
