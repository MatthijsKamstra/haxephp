<?php

// Generated by Haxe 3.4.4
class php_db__PDO_DBNativeStrategy extends php_db__PDO_PHPNativeStrategy {
	public function __construct($dbname) {
		if(!php_Boot::$skip_constructor) {
		$GLOBALS['%s']->push("php.db._PDO.DBNativeStrategy::new");
		$__hx__spos = $GLOBALS['%s']->length;
		parent::__construct();
		$this->dbname = strtolower($dbname);
		$this->key = _hx_string_or_null($dbname) . ":decl_type";
		$GLOBALS['%s']->pop();
	}}
	public $dbname;
	public $key;
	public function map($data) {
		$GLOBALS['%s']->push("php.db._PDO.DBNativeStrategy::map");
		$__hx__spos = $GLOBALS['%s']->length;
		if(!isset($data[$this->key])) {
			$tmp = parent::map($data);
			$GLOBALS['%s']->pop();
			return $tmp;
		}
		$type = $data[$this->key];
		$type = strtolower($type);
		switch($type) {
		case "integer":{
			$GLOBALS['%s']->pop();
			return "int";
		}break;
		case "real":{
			$GLOBALS['%s']->pop();
			return "float";
		}break;
		default:{
			$GLOBALS['%s']->pop();
			return "string";
		}break;
		}
		$GLOBALS['%s']->pop();
	}
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
	function __toString() { return 'php.db._PDO.DBNativeStrategy'; }
}
