<?php

// Generated by Haxe 3.4.4
class Lambda {
	public function __construct(){}
	static function exists($it, $f) {
		{
			$x = $it->iterator();
			while($x->hasNext()) {
				$x1 = $x->next();
				if(call_user_func_array($f, array($x1))) {
					return true;
				}
				unset($x1);
			}
		}
		return false;
	}
	function __toString() { return 'Lambda'; }
}
