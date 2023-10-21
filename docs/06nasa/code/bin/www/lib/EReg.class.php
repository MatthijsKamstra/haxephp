<?php

// Generated by Haxe 3.4.4
class EReg {
	public function __construct($r, $opt) {
		if(!php_Boot::$skip_constructor) {
		$this->pattern = $r;
		$a = _hx_explode("g", $opt);
		$this->{"global"} = $a->length > 1;
		if($this->{"global"}) {
			$opt = $a->join("");
		}
		$this->options = $opt;
		$this->re = '"' . str_replace('"','\\"',$r) . '"' . $opt;
	}}
	public $last;
	public $global;
	public $pattern;
	public $options;
	public $re;
	public $matches;
	public function match($s) {
		$p = preg_match($this->re, $s, $this->matches, PREG_OFFSET_CAPTURE);
		if($p > 0) {
			$this->last = $s;
		} else {
			$this->last = null;
		}
		return $p > 0;
	}
	public function matched($n) {
		$tmp = null;
		if($this->matches !== null) {
			$tmp = $n < 0;
		} else {
			$tmp = true;
		}
		if($tmp) {
			throw new HException("EReg::matched");
		}
		if($n >= count($this->matches)) {
			return null;
		}
		if($this->matches[$n][1] < 0) {
			return null;
		}
		return $this->matches[$n][0];
	}
	public function matchedPos() {
		$tmp = $this->matches[0][1];
		return _hx_anonymous(array("pos" => $tmp, "len" => strlen($this->matches[0][0])));
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
	function __toString() { return 'EReg'; }
}