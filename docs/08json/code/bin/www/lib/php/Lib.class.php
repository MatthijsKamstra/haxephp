<?php

// Generated by Haxe 3.4.4
class php_Lib {
	public function __construct(){}
	static function hprint($v) {
		$GLOBALS['%s']->push("php.Lib::print");
		$__hx__spos = $GLOBALS['%s']->length;
		echo(Std::string($v));
		$GLOBALS['%s']->pop();
	}
	static function associativeArrayOfObject($ob) {
		$GLOBALS['%s']->push("php.Lib::associativeArrayOfObject");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = (array) $ob;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	function __toString() { return 'php.Lib'; }
}
