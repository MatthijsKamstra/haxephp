<?php

// Generated by Haxe 3.4.4
class Main {
	public function __construct() {
		if(!php_Boot::$skip_constructor) {
		$GLOBALS['%s']->push("Main::new");
		$__hx__spos = $GLOBALS['%s']->length;
		$path = _hx_string_or_null(Sys::getCwd()) . "/assets/users.json";
		if(file_exists($path)) {
			$str = sys_io_File::getContent($path);
			$this->json = haxe_Json::phpJsonDecode($str);
			$this->createList();
		} else {
			haxe_Log::trace("ERROR: there is not file: " . _hx_string_or_null($path), _hx_anonymous(array("fileName" => "Main.hx", "lineNumber" => 27, "className" => "Main", "methodName" => "new")));
		}
		$GLOBALS['%s']->pop();
	}}
	public $json;
	public function createList() {
		$GLOBALS['%s']->push("Main::createList");
		$__hx__spos = $GLOBALS['%s']->length;
		$html = "";
		$html = _hx_string_or_null($html) . "<table style=\"width:100%\">";
		$html = _hx_string_or_null($html) . "<tr><th>id</th><th>name</th><th>username</th><th>email</th><th>phone</th><th>website</th></tr>";
		{
			$_g1 = 0;
			$_g = _hx_field($this->json, "length");
			while($_g1 < $_g) {
				$_g1 = $_g1 + 1;
				$i = $_g1 - 1;
				$_user = $this->json[$i];
				$html = _hx_string_or_null($html) . "<tr>";
				$html = _hx_string_or_null($html) . _hx_string_or_null(("<td>" . _hx_string_rec($_user->id, "") . "</td>"));
				$html = _hx_string_or_null($html) . _hx_string_or_null(("<td>" . _hx_string_or_null($_user->name) . "</td>"));
				$html = _hx_string_or_null($html) . _hx_string_or_null(("<td>" . _hx_string_or_null($_user->username) . "</td>"));
				$html = _hx_string_or_null($html) . _hx_string_or_null(("<td>" . _hx_string_or_null($_user->email) . "</td>"));
				$html = _hx_string_or_null($html) . _hx_string_or_null(("<td>" . _hx_string_or_null($_user->phone) . "</td>"));
				$html = _hx_string_or_null($html) . _hx_string_or_null(("<td>" . _hx_string_or_null($_user->website) . "</td>"));
				$html = _hx_string_or_null($html) . "</tr>";
				unset($i,$_user);
			}
		}
		$html = _hx_string_or_null($html) . "</table>";
		php_Lib::hprint($html);
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
	static function main() {
		$GLOBALS['%s']->push("Main::main");
		$__hx__spos = $GLOBALS['%s']->length;
		$main = new Main();
		$GLOBALS['%s']->pop();
	}
	function __toString() { return 'Main'; }
}