<?php
/**
 * Generated by Haxe 4.3.2
 */

use \php\_Boot\HxAnon;
use \php\Boot;
use \haxe\Log;

class Test {
	/**
	 * @return void
	 */
	public static function main () {
		#Test.hx:3: characters 3-8
		(Log::$trace)("Hello World !", new HxAnon([
			"fileName" => "Test.hx",
			"lineNumber" => 3,
			"className" => "Test",
			"methodName" => "main",
		]));
	}
}

Boot::registerClass(Test::class, 'Test');