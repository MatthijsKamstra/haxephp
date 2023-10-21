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
		trace("Example Forms<br>");

		var params = Web.getParams();
		var nm = params.exists('name') ? params.get('name') : 'none';
		var password = params.exists('password') ? params.get('password') : 'none';

		// If no data has been submitted by the user (i.e., they are
		// just arriving at the web page), print the HTML form:

		if ((nm == "none") && (password == "none")) {
			Lib.print('
				<form method="post" action="./">
					Name:  <input type="text" name="name" size="25">
					Password:  <input type="text" name="password" size="25">
					<input type="submit" name="Submit" value="Submit">
				</form>
			');
		} else {
			Lib.print('Welcome: $nm, with password: $password');
		}
	}

	static public function main() {
		var main = new Main();
	}
}
