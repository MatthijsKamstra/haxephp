<?php

// Generated by Haxe 3.4.4
class sys_io_File {
	public function __construct(){}
	static function getContent($path) {
		$GLOBALS['%s']->push("sys.io.File::getContent");
		$__hx__spos = $GLOBALS['%s']->length;
		{
			$tmp = file_get_contents($path);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	function __toString() { return 'sys.io.File'; }
}