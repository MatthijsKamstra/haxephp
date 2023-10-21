package;

/**
 * @author Matthijs Kamstra aka [mck]
 */
class Main {
	function new() {
		var params = Web.getParams();
		var state = params.exists('state') ? params.get('state') : 'home';

		new ViewManager(state);
	}

	static public function main() {
		var main = new Main();
	}
}
