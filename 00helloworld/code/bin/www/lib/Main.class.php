<?php

class Main {
	public function __construct() { if(!php_Boot::$skip_constructor) {
		haxe_Log::trace("Example", _hx_anonymous(array("fileName" => "Main.hx", "lineNumber" => 31, "className" => "Main", "methodName" => "new")));
	}}
	static function main() {
		$main = new Main();
	}
	function __toString() { return 'Main'; }
}
