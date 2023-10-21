package;

import view.*;

class Routes {
	// Base path when url is http://localhost/my_website/bin/
	static public var BASE_URL:String = "/";

	public function new(path:String = '') {
		switch (path.toLowerCase()) {
			case "home":
				new HomeView();
			case "about":
				new AboutView();
			case "contact":
				new ContactView();
			default:
				new HomeView();
		}
	}

	public static function run() {
		var url = Web.getURI().split(Routes.BASE_URL)[1];
		var params = Web.getParams();
		new Routes(url);
	}
}
