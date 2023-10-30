package;

import log.Logger.*;

class Main {
	function new() {
		trace('this is the default trace');
		init();
	}

	function init() {
		Sys.println('this is the default sys.println');
		// logging via Haxe
		log("this is a log message");
		warn("this is a warn message");
		info("this is a info message");
	}

	static public function main() {
		var main = new Main();
	}
}
