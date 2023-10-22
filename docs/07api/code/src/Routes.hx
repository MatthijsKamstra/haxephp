package;

import api.*;
import view.*;

// https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types/Common_types
class Routes {
	// Base path when url is http://localhost/my_website/bin/
	static public var BASE_URL:String = "";

	public function new(path:String = '') {
		switch (path.toLowerCase()) {
			case "/home", "/":
				new HomeView();
			case "/about":
				new AboutView();
			case "/contact":
				new ContactView();
			case "/api", "/api/json":
				new JsonApi();
			case "/api/xml":
				new XmlApi();
			case "/api/csv":
				new CsvApi();
			default:
				new HomeView();
		}
	}

	public static function run() {
		var url = Web.getURI();
		if (BASE_URL != '') {
			url = Web.getURI().split(Routes.BASE_URL)[1];
		}
		var params = Web.getParams();
		new Routes(url);
	}
}
