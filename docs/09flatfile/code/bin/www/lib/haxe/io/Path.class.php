<?php

// Generated by Haxe 3.4.4
class haxe_io_Path {
	public function __construct($path) {
		if(!php_Boot::$skip_constructor) {
		$GLOBALS['%s']->push("haxe.io.Path::new");
		$__hx__spos = $GLOBALS['%s']->length;
		switch($path) {
		case ".":case "..":{
			$this->dir = $path;
			$this->file = "";
			{
				$GLOBALS['%s']->pop();
				return;
			}
		}break;
		}
		$c1 = _hx_last_index_of($path, "/", null);
		$c2 = _hx_last_index_of($path, "\\", null);
		if($c1 < $c2) {
			$this->dir = _hx_substr($path, 0, $c2);
			$path = _hx_substr($path, $c2 + 1, null);
			$this->backslash = true;
		} else {
			if($c2 < $c1) {
				$this->dir = _hx_substr($path, 0, $c1);
				$path = _hx_substr($path, $c1 + 1, null);
			} else {
				$this->dir = null;
			}
		}
		$cp = _hx_last_index_of($path, ".", null);
		if($cp !== -1) {
			$this->ext = _hx_substr($path, $cp + 1, null);
			$this->file = _hx_substr($path, 0, $cp);
		} else {
			$this->ext = null;
			$this->file = $path;
		}
		$GLOBALS['%s']->pop();
	}}
	public $dir;
	public $file;
	public $ext;
	public $backslash;
	public function __call($m, $a) {
		if(isset($this->$m) && is_callable($this->$m))
			return call_user_func_array($this->$m, $a);
		else if(isset($this->__dynamics[$m]) && is_callable($this->__dynamics[$m]))
			return call_user_func_array($this->__dynamics[$m], $a);
		else if('toString' == $m)
			return $this->__toString();
		else
			throw new HException('Unable to call <'.$m.'>');
	}
	static function directory($path) {
		$GLOBALS['%s']->push("haxe.io.Path::directory");
		$__hx__spos = $GLOBALS['%s']->length;
		$s = new haxe_io_Path($path);
		if($s->dir === null) {
			$GLOBALS['%s']->pop();
			return "";
		}
		{
			$tmp = $s->dir;
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$GLOBALS['%s']->pop();
	}
	static function addTrailingSlash($path) {
		$GLOBALS['%s']->push("haxe.io.Path::addTrailingSlash");
		$__hx__spos = $GLOBALS['%s']->length;
		if(strlen($path) === 0) {
			$GLOBALS['%s']->pop();
			return "/";
		}
		$c1 = _hx_last_index_of($path, "/", null);
		$c2 = _hx_last_index_of($path, "\\", null);
		if($c1 < $c2) {
			if($c2 !== strlen($path) - 1) {
				$tmp = _hx_string_or_null($path) . "\\";
				$GLOBALS['%s']->pop();
				return $tmp;
			} else {
				$GLOBALS['%s']->pop();
				return $path;
			}
		} else {
			if($c1 !== strlen($path) - 1) {
				$tmp = _hx_string_or_null($path) . "/";
				$GLOBALS['%s']->pop();
				return $tmp;
			} else {
				$GLOBALS['%s']->pop();
				return $path;
			}
		}
		$GLOBALS['%s']->pop();
	}
	function __toString() { return 'haxe.io.Path'; }
}