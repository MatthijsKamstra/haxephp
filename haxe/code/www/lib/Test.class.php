<?php

class Test {
	public function __construct(){}
	static function main() {
		haxe_Log::trace("Hello World !", _hx_anonymous(array("fileName" => "Test.hx", "lineNumber" => 3, "className" => "Test", "methodName" => "main")));
	}
	function __toString() { return 'Test'; }
}
