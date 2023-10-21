package;

#if php
import php.Lib;
import php.Web;
#elseif neko
import neko.Lib;
import neko.Web;
#end

/**
 * @author Matthijs Kamstra aka [mck]
 */
class Main {
	function new() {
		trace("Example Webapi<br>");
		var params = Web.getParams();
		var name = params.exists('name') ? params.get('name') : 'world';
		Lib.print('Hello ' + name + '!');
	}

	static public function main() {
		var main = new Main();
	}
}
