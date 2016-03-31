<?php

use Pixmicat\Logger\LoggerInterceptor;
use Pixmicat\PMCLibrary;

class LoggerInterceptorTest extends PHPUnit_Framework_TestCase {
	public function testInstance() {
		$obj = new LoggerInterceptor(PMCLibrary::getLoggerInstance('Test'));
		$this->assertNotNull($obj);
		$this->assertInstanceOf('Pixmicat\Aop\MethodInterceptor', $obj);
	}

	/**
	 * @expectedException TypeError
	 */
	public function testInstanceException() {
		$obj = new LoggerInterceptor();
	}

	/**
	 * @expectedException TypeError
	 */
	public function testInstanceException2() {
		$obj = new LoggerInterceptor(NULL);
	}
}